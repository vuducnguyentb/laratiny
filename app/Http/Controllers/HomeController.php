<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = \App\Models\Post::all();
        return view('home',['data' => $data]);
    }
    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
//        $data= $request->all();
//        dd($data['desc']);
        $data           = new \App\Models\Post;
        $data->title    = $request->title;
        $data->slug     = \Str::slug(request('title'));
        $data->desc     = $request->desc;
        $data->save();

        return redirect('home');
    }
}
