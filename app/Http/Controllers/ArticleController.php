<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use \Illuminate\Support\Str;
use \Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::with('user')->get();
        return view('article.index', [
            'articles' => $articles
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'title' => ['string', 'max:50', 'required'],
            'desc' => ['required', 'string'],
            'image' => ['image', 'file', 'max:2048'],
        ]);
        if($request->file('image')) {
            $validate['image'] = $request->file('image')->store('article-post');
        }
        $validate['user_id'] = auth()->user()->id;

        $validate["excerpt"] = Str::limit(strip_tags($request->desc), 200);


        Article::create($validate);

        return redirect()->route('article.index')->with('success', 'You Have New Article');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {

        return view('article.view', [
            'article' => $article,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('article.edit', [
            'article' => $article,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $validate = $request->validate([
            'title' => ['required', 'string', 'max:100'],
            'desc' => ['required', 'string', 'min:10'],
            'image' => ['image', 'file', 'max:2048']
        ]);

        if ($request->hasFile('image')) {
            Storage::delete($article->image);
            $image = $request->file('image');
            $validate['image'] = $image->store('article-post');
        } else {
            $validate['image'] = $article->image;
        }

        $validate['user_id'] = auth()->user()->id;

        $article->update($validate);

        return redirect()->route('article.index')->with('message', 'Article Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        Storage::delete($article->image);
        $article->delete();
        return redirect()->route('article.index')->with('message', 'Article Deleted Successfully!');
    }

    public function adminarticle(Article $article)
     {
        $articles = Article::get();

        return view('admin.article', compact(['articles']));
     }
}
