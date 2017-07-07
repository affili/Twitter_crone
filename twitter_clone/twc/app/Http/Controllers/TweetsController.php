<?php

namespace Patter\Http\Controllers;

use Illuminate\Http\Request;
use App\Tweet;


class TweetsController extends Controller
{
    public function index()
    {

        return view('tweets.index');
    }

    public function create()
    {
        return view('tweets.create');
    }

    public function store()
    {
        Tweet::create(request(['body']));

        return view('/');
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
