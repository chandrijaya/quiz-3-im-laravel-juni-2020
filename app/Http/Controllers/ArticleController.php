<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\ArticleModel;



class ArticleController extends Controller
{
    public function index() {
        $articles = ArticleModel::get_all();
        return view('article.index',compact('articles'));
    }

    public function create() {
        return view('article.create');
    }

    public function store(Request $request) {
        $data = new \App\Models\ArticleModel;
        
        $data->a_title = $request->get('a_title');
        $data->a_content = $request->get('a_content');
        $data->user_id = Auth::id();
        $tags = $request->get('a_tag');

        $data->save($data, $tags);
        return redirect('/artikel');
    }

    public function show($id) {
        $article = ArticleModel::find($id);
        $tags = ArticleModel::findtags($id);
        $uid = Auth::id();
        return view('article.detail',compact('article', 'tags', 'uid'));
    }

    public function edit($id) {
        $article = ArticleModel::find($id);
        return view('article.edit',compact('article'));
    }

    public function update($id, Request $request) {
        $article = ArticleModel::update($id, $request->all());
        return redirect('/artikel');
    }

    public function destroy($id) {
        $quest = ArticleModel::destroy($id);
        return redirect('/artikel');
    }
}
