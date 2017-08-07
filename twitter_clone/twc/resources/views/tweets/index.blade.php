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
        <table class="table table-striped">
          <tr>
            <td rowspan="2" width="70px"><img src="{{ asset('/image/default.jpg') }}" style="width: 70px; height: 70px; float: left; border-radius: 50%; margin-right: 40px; margin-top: 6px;"></td>
            <td>{{ $tweet->user->username }}</td>
            <td>{{ $tweet->created_at->format('Y m/d')}}</td>
          </tr>
          <tr>
            <td width="40%">{{ $tweet->body }}</td>
            
            <td width="40%"><img src="{{ asset('/image/toukou/'.$tweet->fileName) }}" style="width:100%;"></td>
          </tr>
          </a>
        </table>
        @endforeach

      </div>
    </div>



@endsection('content')