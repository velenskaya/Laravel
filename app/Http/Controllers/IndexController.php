<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class IndexController extends Controller
{
    
    public function index() 
    {

    	$head = 'Hello, my first world!';
    	$message = 'This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.';

    	//$articles = Article::all();

      	$articles = Article::select(['id', 'title', 'description'])->get();

       	//dump($articles);

    	return view('codelobsterMy1')->with([   
    										'head'=>$head,
    										'message'=>$message,
    										'articles'=>$articles,
    										]);
    }	

    public function indexPage() 
    {

    	$head = 'Hello, world!';
    	$message = 'This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.';

    	//$articles = Article::all();

      	//$articles = Article::select(['id', 'title', 'description'])->get();

       	//dump($articles);

    	return view('page')->with([   
    										'head'=>$head,
    										'message'=>$message,
    										]);
    }	
}
