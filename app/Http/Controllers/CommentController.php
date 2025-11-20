<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use Illuminate\Http\Request;
use function Pest\Laravel\post;

class CommentController extends Controller
{
    function index(){
        // Orm -> get all data
        $data= Comment::all();

        // pass data to the view
        return view(' comment.index',['comments'=>$data  , "pageTitle"=>"comments" ]);
    }
    function create(){
        // comment::create( [
            // 'author' => 'abdallah',
            // 'content' => 'this is to test comment',
            // 'post_id' => 1
            //  ]);

            Comment::factory(5)->create();

        return redirect('/comments');
    }
}

