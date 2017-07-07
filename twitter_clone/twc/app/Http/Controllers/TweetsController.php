<?php

namespace Patter\Http\Controllers;

use Illuminate\Http\Request;
use Patter\Tweet;


class TweetsController extends Controller
{
    public function index()
    {
        $tweets = Tweet::orderBy('created_at', 'desc')->get();
        return view('tweets.index', compact('tweets'));
    }

    public function create()
    {
        return view('tweets.create');
    }

    public function store(Request $request)
    {
        Tweet::create($request->all());
        return redirect('/');
    }

    public function show($id)
    {
        $tweet = Tweet::find($id);
        return view('tweets.show', compact('tweet'));
    }

    public function edit($id)
    {
        $tweet = Tweet::findOrFail($id);
        return view('tweets.edit', compact('tweet'));
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
