<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use function Pest\Laravel\post;

class TagController extends Controller
{
    function index(){
        // Orm -> get all data
        $data= tag::all();

        // pass data to the view
        return view('tag.index',['tags'=>$data  , "pageTitle"=>"Tags" ]);
    }

    function create(){
        tag::create( [
            'title' => 'css',

        ]);
        return redirect('/tags');
    }

    function TestManyToMany(){
        // $post3 = post::find(3);
        // $post4 = post::find(4);

        // $post3->tags()->attach([1,2]);
        // $post4->tags()->attach([1]);


        // return response()->json( ([
        //     'post3'=>$post3->tags,
        //     'post4'=>$post4->tags
        // ]));

        $tag = Tag::find(2);

        $tag->posts()->attach([4]);
        return response()->json(([
            'tag'=>$tag->title,
            'posts'=>$tag->posts

        ]));
    }
}

