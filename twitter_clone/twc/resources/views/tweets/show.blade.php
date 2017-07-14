@extends('layouts.app')
@section('content')
    <!-- Part 1: Wrap all page content here -->
    <div id="wrap">

      <!-- Begin page content -->
      <div class="container">
        <div class="page-header">
          <h1>Tweet</h1>
        </div>
                <p class="lead">{{ $tweet->created_at}}</p>
                <p class="lead">{{ $tweet->user->username }}</p> 
                <p class="lead">{{ $tweet->user->avatar }}</p> 
                <p class="lead">{{ $tweet->body }}</p>
               @component('layouts.form-del')
                    @slot('controller', 'tweets')
                    @slot('id', $tweet->id)
                    @slot('name', $tweet->body)
              @endcomponent
      </div>
    </div>
@endsection('content')