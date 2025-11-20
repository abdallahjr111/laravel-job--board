<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use function Pest\Laravel\post;

class PostController extends Controller
{
    function index(){
        // Orm -> get all data
        $data= post::paginate( 10);

        // pass data to the view
        return view('post.index',['posts'=>$data  , "pageTitle"=>"Blog" ]);
    }
function show($id){
    $post = post::find($id);

    return view('post.show',['post'=> $post , "pageTitle"=> $post->title ]);
}
    function create(){
        // $post = post::create( [
        //     'title' => 'my find unique post',
        //     'body' => 'this is to test post',
        //     'author' => 'abdallah',
        //     'published' => true
        // ]);

        post::factory(1000)->create();
        return redirect('/blog');
    }
    function delete(){
        $post = post::destroy(4);
    }
}

