<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
                // Orm -> get all data
        $comments= Comment::paginate( 10);

        // pass data to the view
        return view(' comment.index',['comments'=>$comments  , "pageTitle"=>"comments" ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comment.create',["pageTitle"=> "Blog - create new comment"]);

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
            $comment= Comment::find($id);

        return view('comment.show',['comment'=> $comment,'pageTitle'=>'view Comment']);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comment= Comment::find($id);
        return view('comment.edit',['comment'=> $comment,"pageTitle"=> "Blog - edit comment"]);
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
