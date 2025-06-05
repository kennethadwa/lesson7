<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\PostsController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/read', function(){

    $results = DB::select('select * from posts where id = ?', [1]);

    return var_dump($results);

    foreach($results as $post){
    
       return $post->title;
    }

});

//In Laravel 8 below
//Route::get('/contact', 'PostsController@contact');
//Route::get('post/{id}/{name}/{password}', 'PostsController@show_post');

Route::get('/contact', [PostsController::class, 'contact']);

Route::get('post/{id}/{name}/{password}', [PostsController::class, 'show_post']);


Route::get('/insert', function(){

    DB::insert('insert into posts(title, content) values(?, ?)', ['PHP with Laravel', 'Laravel is the best thing that has happened to PHP']);
});

Route::group(['middleware' => ['web']], function(){

});


Route::get('/update', function(){

    $updated = DB::update('update posts set title = "Update Title" where id = ?', [1]);

    return $updated;
});


Route::get('/delete', function(){

    $deleted = DB::delete('delete from posts where id = ?', [1]);

    return $deleted;
});
