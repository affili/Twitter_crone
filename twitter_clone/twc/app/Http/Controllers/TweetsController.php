<?php

namespace Patter\Http\Controllers;
use DB;
use Image;
use Storage;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Patter\Tweet;



class TweetsController extends Controller
{
    public function index()
    {
        $user_id = Auth::id();
        $tweets = Tweet::orderBy('created_at', 'desc')->get();
        return view('tweets.index', compact('tweets'));
    }

    public function create()
    {
        return view('tweets.create');
    }

    public function store(Request $request)
    {
        
        $user_id = Auth::id();
        DB::table('tweets')->insert([
              'body' => $request['body'],
              'user_id' => $user_id,
              'fileName' => $request['fileName']->getClientOriginalName(),
              'created_at'=>Carbon::now(),
              'updated_at'=>$request['updated_at'],
        ]);

        $input = $request->all();

        //getClientOriginalName():アップロードしたファイルのオリジナル名を取得します
        $fileName = $input['fileName']->getClientOriginalName();
        $file = $request->file('image');
        //getRealPath():アップロードしたファイルのパスを取得します。
        $image = Image::make($input['fileName']->getRealPath());
        $path = public_path().$image;
        $image->save(public_path() . '/image/toukou/'. $fileName);
        //画像を保存する
        // $image->save($fileName);   #(2)

        return redirect('/');
    }

    public function show($id)
    {
        $tweet = Tweet::find($id);
        return view('tweets.show', compact('tweet'));
    }

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
        $tweet = Tweet::find($id);
        $tweet->delete($id);
        \Session::flash('flash_message', '削除しました。');
        return redirect('/');
    }
}
