<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Http\Requests;

class PagesController extends Controller
{
    
    public function index()
    {
    	$articles = Article::all();

    	return view('home')->with(['articles'=>$articles]);
    }
}
