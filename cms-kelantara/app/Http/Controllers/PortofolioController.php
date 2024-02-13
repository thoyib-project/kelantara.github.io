<?php

namespace App\Http\Controllers;

use App\Models\Portofolio;
use Illuminate\Http\Request;
use App\Models\PortofolioImage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;

class PortofolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $porto = Portofolio::latest()->get();
        return view('admin.portofolio.index', compact('porto'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.portofolio.create');
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
            $newPorto = new Portofolio();
            $newPorto->title = $request->title;
            $newPorto->description = $request->description;

            $newPorto->save();
            if($request->has('image'))
            {
                foreach($request->file('image') as $image){
                    $image2 = 'Porto'.rand(1,9999).$image->getClientOriginalExtension();
                    $image->move(public_path().'/img/', $image2);
                    PortofolioImage::create([
                        'porto_id' => $newPorto->id,
                        'image' => $image2,
                    ]);
                }
            }
            DB::commit();
            Alert::success('success', 'Data Has Been Stored');
            return redirect('/admin/portofolio');
        } catch (\Throwable $th) {
            DB::rollBack();
            Alert::error('error', $th->getMessage());
            return back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Portofolio $portofolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $porto = Portofolio::find($id);
        return view('admin.portofolio.edit', compact('porto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            $editPorto = Portofolio::find($id);
            $editPorto->title = $request->title;
            $editPorto->description = $request->description;

            $editPorto->save();
            if($request->has('image'))
            {
                $delImage = PortofolioImage::where('porto_id', $id)->get();
                foreach($delImage as $item){
                    $directory = public_path('img');
                    $filePath = $directory . '/' . $item->image;
                    if (File::exists($filePath)) {
                        File::delete($filePath);
                    }
                    $item->delete();
                }
                foreach($request->file('image') as $image){
                    $image2 = 'Porto'.rand(1,9999).$image->getClientOriginalExtension();
                    $image->move(public_path().'/img/', $image2);
                    PortofolioImage::create([
                        'porto_id' => $editPorto->id,
                        'image' => $image2,
                    ]);
                }
            }
            DB::commit();
            Alert::success('success', 'Data Has Been Updated');
            return redirect('/admin/portofolio');
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
        $delete = Portofolio::find($id);
        $delImage = PortofolioImage::where('porto_id', $id)->get();
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
