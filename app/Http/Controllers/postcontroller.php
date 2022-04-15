<?php

namespace App\Http\Controllers;

use App\Models\article;
use Illuminate\Http\Request;

class postcontroller extends Controller
{
    public function post($id){
$article = article::find($id);
return view('post',compact('article','id'));

    }
}
