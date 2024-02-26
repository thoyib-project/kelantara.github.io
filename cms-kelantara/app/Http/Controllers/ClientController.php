<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $client = Client::latest()->get();
        return view('admin.client.index', compact('client'));
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
            'image' => 'required|file|mimes:jpeg,jpg,png',
        ],[
            'name' => 'Insert Client Name',
            'image' => 'Insert Client Logo',
            'image.mimes' => 'Image Must Be .png, .jpeg, or jpg',
        ]);
        try {
            $newClient = new Client();
            $newClient->name = $request->name;
            if($request->hasFile('image'))
            {
                $image = 'CLient'.rand(1,99999).'.'.$request->image->getClientOriginalExtension();
                $request->file('image')->move(public_path().'/img/', $image);
                $newClient->image = $image;
                $newClient->save();
            }
            $newClient->save();
            
            Alert::success('success', 'Data Has Been Stored');
            return redirect('/admin/clients');
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
            $editClient = Client::find($id);
            $editClient->name = $request->name;
            if($request->hasFile('image'))
            {
                $directory = public_path('img');
                $filePath = $directory . '/' . $editClient->image;
                if (File::exists($filePath)) {
                    File::delete($filePath);
                }
                $image = 'Client'.rand(1,99999).'.'.$request->image->getClientOriginalExtension();
                $request->file('image')->move(public_path().'/img/', $image);
                $editClient->image = $image;
                $editClient->save();
            }
            $editClient->save();
            
            Alert::success('success', 'Data Has Been Updated');
            return redirect('/admin/clients');
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
        $delete = Client::find($id);
        $directory = public_path('img');
        $filePath = $directory . '/' . $delete->image;
        if (File::exists($filePath)) {
            File::delete($filePath);
        }

        $delete->delete();
        return back();
    }
}
