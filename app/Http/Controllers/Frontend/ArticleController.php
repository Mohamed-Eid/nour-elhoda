<?php

namespace App\Http\Controllers\Frontend;

use App\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::paginate(2);
        return view('frontend.articles.index',compact('articles'));
    }

    public function more(){
        $page = request()->page;
        $articles = Article::take($page*6)->get();
        return view('frontend.articles.ajax',compact('articles'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function show(Article $article)
    {
        return view('frontend.articles.show',compact('article'));
    }
}
