<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{

    public function getArtByUser(User
    $user)
    {
        return view('article.artByUser', compact('user'));
    }

    public function index()
    {
        $articles = Article::all();
        return view("article.index", compact("articles"));
    }

    public function create()
    {
        return view("article.create");
    }

    public function store(Request $request)
    {

        // MASS ASSIGNMENT
        Auth::user()->articles()->create(
            [
                'title' => $request->input('title'),
                'name' => $request->input('name'),
                'body' => $request->input('body'),
                'img' => $request->has('img') ? $request->file('image')->store('public/productImg') : '/img/none.jpg',
            ]
        );
        return redirect(route('plans'))->with('message', 'Articolo publiccato con successo');
    }

    public function show(Article $article)
    {
        return view('article.show', compact('article'));
    }

    public function update(Article $article)
    {
        return view('article.update', compact('article'));
    }

    public function edit(Request $request, Article $article)
    {

        $article->title = $request->title;
        $article->body = $request->body;
        $article->name = $request->name;
        if ($request->file('img')) {
            $article->img = $request->file('img')->store('public');
        }
        $article->save();

        return redirect(route('article.show', compact('article')))->with('message', 'Articolo modificato con successo!');
    }

    public function destroy(Article $article)
    {
        $article->delete();
        return redirect(route('home'))->with('message', 'Cancellazione avvenuta con successo!');
    }
}
