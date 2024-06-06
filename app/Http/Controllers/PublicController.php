<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function home(){
        return view('welcome');
    }

    public function plans(){
        $articles = Article::all()->sortDesc();
        // dd($articles);
        return view('plans', compact('articles'));
    }

    public function contact(){
        return view('contact');
    }

    public function submit(Request $request){
        $email = $request->email;
        $body = $request->body;
        
        $content = compact('email', 'body');
        Mail::to('admin@gymwellness.it')->send(new ContactMail($content));

        return redirect(route('home'))->with('message','Grazie per averci contattato!');
    }

}
