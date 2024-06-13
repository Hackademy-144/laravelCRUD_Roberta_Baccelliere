<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ArticleRequest;

class ArticleController extends Controller
{

    public function getArtByUser(User $user)
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

    public function store(ArticleRequest $request)
    {

        // MASS ASSIGNMENT
        $article = Auth::user()->articles()->create(
            [
                'title' => $request->input('title'),
                'name' => $request->input('name'),
                'body' => $request->input('body'),
                'img' => $request->has('img') ? $request->file('image')->store('public/productImg') : '/img/none.jpg',
            ]
        );

        foreach ($request->input('tag_id') as $tag) {
            $article->tags()->attach($tag);
            // attach è un metodo della relazione belongsToMany che crea una nuova associazione nella tabella Pivot con gli id dell'oggetto su cui richiamo $article
        }

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
