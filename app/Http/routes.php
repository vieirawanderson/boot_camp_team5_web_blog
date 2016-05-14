<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/read', function() {
    $post = new App\Post();
    
    $data = $post->all(array('title','id'));

    foreach ($data as $list) {
        echo $list->id . ' ' . $list->title . '
';
    }
});

// Route::get('blog', function () { 
// 	return view('blog', array('name' => 'The Raven', 'day' => 'Friday')); 
// });

Route::get('/', 'Front@index'); // MUDAR AQUI PARA BLOG

Route::get('/blog','Front@blog');

Route::get('/blog_post','Front@blog_post');

Route::get('/blog_post/{url}','Front@blog_post'); // mudar aqui para /post/{id}

Route::get('/sobre_nos','Front@sobre_nos');

Route::get('/e_book','Front@e_book');


//Route::get('/{name}', 'Front@show');

// Route::get('/', function () {

	

// 	// DB::table('email')->insert(array('nome' => 'joaozin','email' => 'joaozin@gmail'));
	

// 	// $emails = DB::table('email')->where('id',2)->get();
// 	// dd($emails);

// 	// $users = DB::select("SELECT * FROM email");
// 	// var_dump($users);


// 	// $name = DB::Connection()->getDatabaseName();
// 	// return $name;
//  //    return view('welcome');
// });
