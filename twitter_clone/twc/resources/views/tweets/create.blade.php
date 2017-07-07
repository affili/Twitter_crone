@extends('layouts.app')
@section('content')
<h1>Create Tweet</h1>
<form method="POST" action="/tweets">
{{ csrf_field()}}
  <fieldset>
    <legend>Tweet</legend>
    <input type="text-area" placeholder="Type something…">
    <button type="submit" class="btn">Submit</button>
  </fieldset>
</form>
@endsection('content')