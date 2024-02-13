<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blog = Blog::latest()->get();
        return view('admin.blog.index', compact('blog'));
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
            'image' => 'required|file|mimes:jpeg,jpg,png',
        ],[
            'title' => 'Insert Blog Title',
            'description' => 'Insert Description',
            'image' => 'Insert Example Image',
            'image.mimes' => 'Image Must Be .png, .jpeg, or jpg',
        ]);
        try {
            $newBlog = new Blog();
            $newBlog->title = $request->title;
            $newBlog->description = $request->description;
            if($request->hasFile('image'))
            {
                $image = 'Blog'.rand(1,99999).'.'.$request->image->getClientOriginalExtension();
                $request->file('image')->move(public_path().'/img/', $image);
                $newBlog->image = $image;
                $newBlog->save();
            }
            $newBlog->save();
            
            Alert::success('success', 'Data Has Been Stored');
            return redirect('/admin/blogs');
        } catch (\Throwable $th) {
            Alert::error('error', $th->getMessage());
            return back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $editBlog = Blog::find($id);
            $editBlog->title = $request->title;
            $editBlog->description = $request->description;
            if($request->hasFile('image'))
            {
                $directory = public_path('img');
                $filePath = $directory . '/' . $editBlog->image;
                if (File::exists($filePath)) {
                    File::delete($filePath);
                }
                $image = 'Blog'.rand(1,99999).'.'.$request->image->getClientOriginalExtension();
                $request->file('image')->move(public_path().'/img/', $image);
                $editBlog->image = $image;
                $editBlog->save();
            }
            $editBlog->save();
            
            Alert::success('success', 'Data Has Been Updated');
            return redirect('/admin/blogs');
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
        $delete = Blog::find($id);
        $directory = public_path('img');
        $filePath = $directory . '/' . $delete->image;
        if (File::exists($filePath)) {
            File::delete($filePath);
        }

        $delete->delete();
        return back();
    }
}
