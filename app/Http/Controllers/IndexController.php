<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class IndexController extends Controller
{
    
	protected $message;
	protected $header;

	public function __construct()
	{
		$this->header = 'Hello, my first world!';
    	$this->message = 'This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.';

	}

    public function index() 
    {

    	
    	//$articles = Article::all();

      	$articles = Article::select(['id', 'title', 'description'])->get();

       	//dump($articles);

    	return view('page')->with([   
    								'header'=>$this->header,
    								'message'=>$this->message,
    								'articles'=>$articles,
    								]);
    }	

    /*
    public function indexTestPage() 
    {

    	$head = 'Hello, world!';
    	$message = 'This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.';

    	$articles = Article::all();

      	$articles = Article::select(['id', 'title', 'description'])->get();

    	dump($articles);

    	return view('page')->with([   
    										'head'=>$head,
    										'message'=>$message,
    										]);
    }*/	

	public function show($id) 
    {
    	//dump($id);
    	//$article = Article::find($id);
    	//dump($article);
    	//запись where('id', $id) эвивалентна where id = $id
    	$article = Article::select(['id','title','text'])->where('id', $id)->first();
    	//dump($article);
    	return view('article-content')->with([   
    								'header'=>$this->header,
    								'message'=>$this->message,
    								'article'=>$article,
    								]); 
    }   

}
