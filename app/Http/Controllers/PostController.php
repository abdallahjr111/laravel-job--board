<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
                // Orm -> get all data
        $data= Post::paginate( 10);

        // pass data to the view
        return view('post.index',['posts'=>$data  , "pageTitle"=>"Blog" ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Post.create',["pageTitle"=> "Blog - create new post" ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // to do: this will completed form section
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    $post = post::find($id);

    return view('post.show',['post'=> $post , "pageTitle"=> $post->title ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
    return view('Post.edit',["pageTitle"=> "Blog - edit post" ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
             // to do: this will completed form section
    }
}
