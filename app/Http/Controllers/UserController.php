<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        $users = User::where('level', 0)->with('article')->paginate(5);
        $articles = Article::count();
        $user = User::where('level', '0')->count();
        $admin = User::where('level', '1')->count();

        return view('admin.index', compact(['users']), [
            'user' => $user,
            'articles' => $articles,
            'user' => $user,
            'admin' => $admin,
            'categories' => Category::paginate(4),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('admin.create', [
            'admin' => User::where('level', 1)->get(),
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
            'name' => ['required', 'string', 'max:1000'],
            'email' => ['required', 'email', 'string'],
            'password' => ['required', 'confirmed', 'string'],
        ]);

        if ($request->filled('password')) {
            $validate['password'] = Hash::make($request->password);
        }
        $validate['level'] = 1;
        User::create($validate);

        return back()->with('success', 'account created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $articles = Article::query()->where('user_id', $user->id)->get();
        return view('admin.view', [
            'user' => $user,
            'article' => Article::where('user_id', $user->id)->count(),
            'articles' => $articles,
            'categories' => Category::paginate(4),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $articles = Article::query()->where('user_id', $user->id)->get();
        return view('profile.profile', [
            'user' => $user,
            'users' => User::where('id', auth()->user()->id)->get(),
            'articles' => $articles,
            'categories' => Category::paginate(4),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['email', 'required', 'string'],
            'password' => ['string', 'confirmed', ]
        ]);
        if ($request->filled('password')) {
            $validate['password'] = Hash::make($request->password);
        }

        User::where('id', auth()->user()->id)->update($validate);
        return back()->with('success', 'update success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);

        $user->delete();
        return back()->with('success', 'delete success');
    }
}
