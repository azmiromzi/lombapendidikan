<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Comment;
use App\Models\User;
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
        $articles = Article::with('user')->paginate(6);
        return view('article.index', [
            'articles' => $articles,
            'categories' => Category::paginate(4),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('article.create', [
            'categoriess' => Category::get(),
            'categories' => Category::paginate(4),
        ]);
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
            'category_id' => ['string']
        ]);
        if($request->file('image')) {
            $validate['image'] = $request->file('image')->store('article-post', 'public');
        }
        $validate['user_id'] = auth()->user()->id;

        $validate["excerpt"] = Str::limit(strip_tags($request->desc), 200);


        Article::create($validate);

        return back()->with('success', 'You Have New Article');
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
            'comments' => Comment::where('article_id', $article->id)->orderBy('id', 'desc')->get(),
            'categories' => Category::paginate(4),
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
            'categories' => Category::paginate(4),

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
            'image' => ['image', 'file', 'max:2048'],
            'category_id' => ['string']

        ]);

        if ($request->hasFile('image')) {
            Storage::delete($article->image);
            $image = $request->file('image');
            $validate['image'] = $image->store('article-post', 'public');
        } else {
            $validate['image'] = $article->image;
        }

        $validate['user_id'] = auth()->user()->id;

        $article->update($validate);

        return back()->with('success', 'Article Updated!');
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
        return back()->with('success', 'Article delete!');
    }

    public function adminarticle(Article $article)
     {
        $articles = Article::get();
        $article = Article::count();
        $user = User::where('level', '0')->count();
        $admin = User::where('level', '1')->count();


        return view('admin.article', compact(['articles', 'article', 'user', 'admin']), [
            'categories' => Category::paginate(4),
        ]);
     }
}
