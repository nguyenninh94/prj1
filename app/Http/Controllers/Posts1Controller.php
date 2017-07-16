<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post1;
use Counter;

class Posts1Controller extends Controller
{
    public function index()
    {
    	$post1 = Post1::orderBy('id', 'DESC')->get();
    	return view('welcome', compact('post1'));
    }

    public function show($id)
    {
    	$post1 = Post1::find($id);
    	Counter::showAndCount('post', $post1->id);
    	return view('show', compact('post1'));
    }
}
