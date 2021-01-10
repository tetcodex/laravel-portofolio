<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
   
    public function index()
    {
        $data = Article::all();
        return view('restricted.article.index', compact('data'));
    }

    public function create()
    {
        return view('restricted.article.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'subtitle'  => 'required',
            'title'     => 'required',
            'content'   => 'required',
        ]);

        Article::create([
            'title'    => $request->title,
            'content'  => $request->content,
            'subtitle' => $request->subtitle,
            
        ]);

        return redirect('/restricted/article/');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $article = Article::find($id);
        return view('restricted.article.edit', compact('article'));
    }

    public function update(Request $request, $id)
    {
        Article::find($id)->update([
            'title'    => $request->title,
            'content'  => $request->content,
            'subtitle' => $request->subtitle,
        ]);

        return redirect('/restricted/article/');
    }

    public function destroy($id)
    {
        Article::find($id)->delete();
        return redirect('/restricted/article/');
    }
}
