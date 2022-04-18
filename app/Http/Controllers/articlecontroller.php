<?php

namespace App\Http\Controllers;

use App\Models\article;
use Illuminate\Http\Request;

class articlecontroller extends Controller
{
    public function index(){
     $article = article::all();
    return view('home',compact('article'));

    }
    public function index2(){
        $article = article::all();
        return view('post',compact('article'));
       }
}
