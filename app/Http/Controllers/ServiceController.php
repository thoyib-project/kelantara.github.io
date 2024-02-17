<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $service = Service::latest()->get();
        return view('admin.service.index', compact('service'));
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
            'title' => 'required',
            'description' => 'required',
        ],[
            'title' => 'Insert Service Title',
            'description' => 'Insert Description',
        ]);
        try {
            $newService = new Service();
            $newService->title = $request->title;
            $newService->description = $request->description;
            $newService->save();
            
            Alert::success('success', 'Data Has Been Stored');
            return redirect('/admin/service');
        } catch (\Throwable $th) {
            Alert::error('error', $th->getMessage());
            return back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $editService = Service::find($id);
            $editService->title = $request->title;
            $editService->description = $request->description;
            $editService->save();
            
            Alert::success('success', 'Data Has Been Updated');
            return redirect('/admin/service');
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
        $delete = Service::find($id);
        $delete->delete();

        return back();
    }
}
