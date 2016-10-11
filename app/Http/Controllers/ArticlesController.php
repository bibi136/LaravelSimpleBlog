<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\ArticleFormRequest;

class ArticlesController extends Controller
{
    
    public function index() {
        $articles = Article::paginate(4);

        return view('articles.index')->with(['articles'=>$articles]);
    }

    public function show($id)   
    {
        $article = Article::find($id);

        return view('articles.show')->with(['article'=>$article]);
    }

    public function xxx()
    {
        return view('articles.xxx');
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(ArticleFormRequest $request)
    {

        $title = $request->input('title');
        $content = $request->input('content');

        Article::create([
            'title' => $title,
            'content' => $content
            ]);

        return redirect()->route('article.index');
    }

    public function edit($id)
    {
        $article = Article::find($id);

        return view('articles.edit', ['article'=>$article]);
    }

    public function update($id, ArticleFormRequest $request)
    {
        $article = Article::find($id);

        $article->update([
            'title' => $request->input('title'),
            'content' => $request->input('content')
        ]);

        return redirect()->route('article.index');
    }

    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();

        return redirect()->route('article.index');
    }
}
