@extends('layouts.app')
@section('content')
    <!-- Part 1: Wrap all page content here -->
    <div id="wrap">

      <!-- Begin page content -->
      <div class="container">
        <div class="page-header">
          <h1>Tweet</h1>
        </div>
            <form method="POST" action="/tweets/{$id}">
                <p class="lead">{{ $tweet->created_at}}</p>
                <p class="lead">{{ $tweet->user->username }}</p> 
                <p class="lead">{{ $tweet->body }}</p>
                <button type="button" class="btn btn-danger">Delete</button>
            </form>
      </div>
    </div>
@endsection('content')