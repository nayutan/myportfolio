<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest()->get();//
        return view('show',['posts' => $posts]);
        //showを表示して、かつpostsテーブルを$postsに入れておく
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $posts = new Post;
        $posts->postTitle = $request->postTitle;
        $posts->postText = $request->postText;
        $posts->postColor = $request->postColor;
        $posts->postIP = $request->postIP;
        $posts->save();
        return redirect('show');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //データの書き込みに使用するメソッド
        //postテーブル->レコード名 = 送信された->データ名(name)
        $post = new Post();
        $post->postTitle = $request->postTitle;
        $post->postText = $request->postText;
        $post->postColor = $request->postColor;
        $post->postIP = $request->postIP;
        $post->save();
        return redirect('show');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
