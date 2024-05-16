<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function displayContact(){
        return view('contact');
    }

    public function displayPost($id, $password, $name){
        return view('post', compact('id', 'password', 'name'));
    }
}