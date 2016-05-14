<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Post; //Tem que chamar o Model para buscar no BD

class Front extends Controller
{
    public function index()
    {
        return 'index page';
    }

    public function blog() {
    	// $posts = Posts::where('id','1')->orderBy('id','desc');
    	// $posts = Post::where('id','1')->get();

    	// $posts = Post::all();

    	$posts = Post::orderBy('id', 'DESC')->get();

    	return view('blog',compact('posts'));
    }

    public function blog_post($url) {

    	$posts = Post::where('url', $url)->get();

        return view('blog_post',compact('posts'));
    }

    public function sobre_nos() {
        return view('sobre_nos', array('page' => 'sobre_nos'));
    }

    public function e_book() {
        return view('e_book', array('page' => 'e_book'));
    }

 //    public function show($name)
	// {
 //    return view('welcome',array('name' => $name));
	// }


}
