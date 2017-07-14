@extends('layouts.app')
@section('content')
    <!-- Part 1: Wrap all page content here -->
    <div id="wrap">

      <!-- Begin page content -->
      <div class="container">
        <div class="page-header">
          <h1>Tweet</h1>
        </div>
        <table class="table table-striped">
          <tr>
            <td rowspan="2" width="70px"><img src="{{ asset('/image/default.jpg') }}" style="width: 70px; height: 70px; float: left; border-radius: 50%; margin-right: -60px; margin-top: 6px;"></td>
            <td>{{ $tweet->user->username }}</td>
            <td>{{ $tweet->created_at}}</td>
          </tr>
          <tr>
            <td width="5px"></td>
            <td>{{ $tweet->body }}</td>
          <tr>
        </table>
               @component('layouts.form-del')
                    @slot('controller', 'tweets')
                    @slot('id', $tweet->id)
                    @slot('name', $tweet->body)
              @endcomponent
      </div>
    </div>
@endsection('content')