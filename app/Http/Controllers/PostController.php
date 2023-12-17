<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    private $columns = ['title', 'description', 'auther', 'published'];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::get();
        return view('postTable', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       // $posts = new Post();

        //$posts->title = $request->title;
        //$posts->description = $request->description;
        //$posts->auther = $request->auther;
        //if(isset($request->published)){

            //$posts->published = 1;
        //}else{
            //$posts->published = 0;
        //}
        //$posts->save();
        //return "posts inserted successfully";

        $data = $request->validate([
            'title' => 'required|string|max:50',
            'description' => 'required|string',
            'auther' => 'required',
        ]);
        //$data = $request->only($this->columns);
        $data['published'] = isset($request->published);
        Post::create($data);
        return redirect('postTable');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $posts = Post::findorfail($id);
        return view('showPost', compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $posts = Post::findorfail($id);
        return view('updatePost', compact('posts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->only($this->columns);
        $data['published'] = isset($request->published);
        Post::where('id', $id)->update($data);
        return redirect('postTable');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Post::where('id', $id)->delete();
        return redirect('postTable');
    }
    /**
     *show Trashed List
     */
    public function trashed()
    {
        $Tpost = Post::onlyTrashed()->get();
        return view('trashed', compact('Tpost'));
    }
    /**
     * delete data permenantly
     */

     public function forceDelete(string $id)
    {
        Post::where('id', $id)->forceDelete();
        return redirect('postTable');  
    }
    /**
     * restore data
     */
    public function restore(string $id)
    {
        Post::where('id', $id)->restore();
        return redirect('postTable');  
    }
}
