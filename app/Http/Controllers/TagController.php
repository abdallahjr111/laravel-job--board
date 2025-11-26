<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
             // Orm -> get all data
        $tags= Tag::paginate(10);

        // pass data to the view
        return view('tag.index',['tags'=>$tags  , "pageTitle"=>"Tags" ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
            return view('Tag.create',["pageTitle"=> "create - create new tag" ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tag= Tag::find($id);

        return view('tag.show',['tag'=> $tag ,"pageTitle"=> "views - view tag"]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tag= Tag::find($id);
                return view('tags.edit',[ 'tag'=> $tag,"pageTitle"=> "edit post"]);
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
        //
    }
}
