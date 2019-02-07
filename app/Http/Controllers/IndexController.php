<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
class IndexController extends Controller
{
    //
    public function index() {

    	$head = 'ПРИВЕТ ПЕРВАЯ СТРАНИЦА';
    	$message = 'This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.';
    	$articles = Article::all();

    	dump($articles);


    	return view('codelobsterMy1')->with(['head'=>$head,'message'=>$message,]);
    }	
}

