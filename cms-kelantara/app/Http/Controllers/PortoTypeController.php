<?php

namespace App\Http\Controllers;

use App\Models\PortoType;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PortoTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $type = PortoType::latest()->get();
        return view('admin.portotype.index', compact('type'));
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
        ],[
            'name' => 'Insert Type Name',
        ]);

        try {
            $newType = new PortoType();
            $newType->name = $request->name;
            
            $newType->save();

            Alert::success('success', 'Data Has Been Stored');
            return back();
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
            $editType = PortoType::find($id);
            $editType->name = $request->name;
            
            $editType->save();

            Alert::success('success', 'Data Has Been Updated');
            return back();
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
        $delete = PortoType::find($id);
        $delete->delete();

        return back();
    }
}
