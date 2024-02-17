<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SpecialService;
use Illuminate\Support\Facades\DB;
use App\Models\SpecialServiceImage;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;

class SpecialServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ss = SpecialService::latest()->get();
        return view('admin.specialservice.index', compact('ss'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.specialservice.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required',
        ],[
            'title' => 'Insert Blog Title',
            'description' => 'Insert Description',
        ]);

        try {
            DB::beginTransaction();
            $newSS = new SpecialService();
            $newSS->title = $request->title;
            $newSS->description = $request->description;

            $newSS->save();
            if($request->has('image'))
            {
                foreach($request->file('image') as $image){
                    $image2 = 'SS'.rand(1,9999).'.'.$image->getClientOriginalExtension();
                    $image->move(public_path().'/img/', $image2);
                    SpecialServiceImage::create([
                        'ss_id' => $newSS->id,
                        'image' => $image2,
                    ]);
                }
            }
            DB::commit();
            Alert::success('success', 'Data Has Been Stored');
            return redirect('/admin/special-service');
        } catch (\Throwable $th) {
            DB::rollBack();
            Alert::error('error', $th->getMessage());
            return back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(SpecialService $specialService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $ss = SpecialService::find($id);
        return view('admin.specialservice.edit', compact('ss'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            $editSS = SpecialService::find($id);
            $editSS->title = $request->title;
            $editSS->description = $request->description;

            $editSS->save();
            if($request->has('image'))
            {
                $delImage = SpecialServiceImage::where('ss_id', $id)->get();
                foreach($delImage as $item){
                    $directory = public_path('img');
                    $filePath = $directory . '/' . $item->image;
                    if (File::exists($filePath)) {
                        File::delete($filePath);
                    }
                    $item->delete();
                }
                foreach($request->file('image') as $image){
                    $image2 = 'SS'.rand(1,9999).'.'.$image->getClientOriginalExtension();
                    $image->move(public_path().'/img/', $image2);
                    SpecialServiceImage::create([
                        'ss_id' => $editSS->id,
                        'image' => $image2,
                    ]);
                }
            }
            DB::commit();
            Alert::success('success', 'Data Has Been Updated');
            return redirect('/admin/special-service');
        } catch (\Throwable $th) {
            DB::rollBack();
            Alert::error('error', $th->getMessage());
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $delete = SpecialService::find($id);
        $delImage = SpecialServiceImage::where('ss_id', $id)->get();
        foreach($delImage as $item){
            $directory = public_path('img');
            $filePath = $directory . '/' . $item->image;
            if (File::exists($filePath)) {
                File::delete($filePath);
            }
            $item->delete();
        }
        
        $delete->delete();

        return back();
    }
}
