<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;

class HomeControlle extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
        
    /*
    
    
    */
    public function index()
    {
        $articles = Article::paginate(10);
        return view('Home')->with('articles' , $articles);
    }
}
