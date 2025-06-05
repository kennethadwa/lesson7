<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{

    public function destroy($id){
        //
    }


    public function contact(){

        $people = ['Edwin', 'Jose', 'James', 'Peter', 'Maria'];


        return view('contact', compact('people'));
    }


    public function show_post($id, $name, $password){

        return view('post', compact('id', 'name', 'password'));

    }
}
