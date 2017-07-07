<?php

namespace Patter\Http\Controllers;

use Illuminate\Http\Request;
use Patter\Tweet;


class TweetsController extends Controller
{
    public function index()
    {
        $tweets = Tweet::all();
        return view('tweets.index', compact('tweets'));
    }

    public function create()
    {
        return view('tweets.create');
    }

    public function store(Request $request)
    {
        Tweet::create($request->all());
        // dump($request['test']);
        // Tweet::create(
        //     request()->all()
        // );

        return redirect('/');
    }

    public function show($id)
    {
        return view('/');
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
