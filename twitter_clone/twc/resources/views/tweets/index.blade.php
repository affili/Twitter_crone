@extends('layouts.app')
@section('content')


  <body>


    <!-- Part 1: Wrap all page content here -->
    <div id="wrap">

      <!-- Begin page content -->
      <div class="container">
        <div class="page-header">
          <h1>Tweet</h1>
        </div>
        @foreach($tweets as $tweet)
        <a href="/tweets/{{ $tweet->id }}">
        <p class="lead">{{ $tweet->body }}</p>
        </a>
        @endforeach

      </div>
    </div>



@endsection('content')