@extends('layouts.app')
@section('content')
    <!-- Part 1: Wrap all page content here -->
    <div id="wrap">

      <!-- Begin page content -->
      <div class="container">
        <div class="page-header">
          <h1>Create Tweet</h1>
        </div>
        <form method="POST" action="/tweets">
        {{ csrf_field()}}
          <fieldset>
            <legend>Tweet</legend>
            <input type="text-area" name="body" placeholder="Type something…"> `
            <button type="submit" class="btn">Submit</button>
          </fieldset>
        </form>
      </div>
    </div>
@endsection('content')