<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testi = Testimoni::latest()->get();
        return view('admin.testimoni.index', compact('testi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'testimoni' => 'required',
            'image' => 'required|file|mimes:jpeg,jpg,png',
        ],[
            'name' => 'Insert Name Customer',
            'testimoni' => 'Insert Testimoni',
            'image' => 'Insert Image',
            'image.mimes' => 'Image Must Be .png, .jpeg, or jpg',
        ]);
        try {
            $newTesti = new Testimoni();
            $newTesti->name = $request->name;
            $newTesti->testimoni = $request->testimoni;
            if($request->hasFile('image'))
            {
                $image = 'testi'.rand(1,99999).'.'.$request->image->getClientOriginalExtension();
                $request->file('image')->move(public_path().'/img/', $image);
                $newTesti->image = $image;
                $newTesti->save();
            }
            $newTesti->save();
            
            Alert::success('success', 'Data Has Been Stored');
            return redirect('/admin/testimoni');
        } catch (\Throwable $th) {
            Alert::error('error', $th->getMessage());
            return back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $editTesti = Testimoni::find($id);
            $editTesti->name = $request->name;
            $editTesti->testimoni = $request->testimoni;
            if($request->hasFile('image'))
            {
                $directory = public_path('img');
                $filePath = $directory . '/' . $editTesti->image;
                if (File::exists($filePath)) {
                    File::delete($filePath);
                }
                $image = 'testi'.rand(1,99999).'.'.$request->image->getClientOriginalExtension();
                $request->file('image')->move(public_path().'/img/', $image);
                $editTesti->image = $image;
                $editTesti->save();
            }
            $editTesti->save();
            
            Alert::success('success', 'Data Has Been Updated');
            return redirect('/admin/testimoni');
        } catch (\Throwable $th) {
            Alert::error('error', $th->getMessage());
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $delete = Testimoni::find($id);
        $directory = public_path('img');
        $filePath = $directory . '/' . $delete->image;
        if (File::exists($filePath)) {
            File::delete($filePath);
        }

        $delete->delete();
        return back();
    }
}
