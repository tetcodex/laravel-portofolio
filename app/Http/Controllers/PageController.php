<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Article;

class PageController extends Controller
{
    public function index()
    {
        return view ('index');
    }
    
    public function create()
    {
        
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required',
            'message' => 'required',
        ]);

        Page::create([
            'name'     => $request->name,
            'message'  => $request->message
        ]);
        
        return redirect('/');

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
    
    public function article()
    {
        $data = Article::all();
        return view ('page.article', compact('data'));
    }

    public function portofolio()
    {
        return view ('page.portofolio');
    }

}
