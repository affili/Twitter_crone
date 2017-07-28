@extends('layouts.app')
@section('content')


  <body>


    <!-- Part 1: Wrap all page content here -->
    <div id="wrap">

      <!-- Begin page content -->
      <div class="container">
        <div class="page-header">
          <h1>Photos</h1>
        </div>
        <h1>Laravelでアップロード完了</h1>
 
{{$path}}
 
<img src="{{$path}}">

      </div>
    </div>



@endsection('content')