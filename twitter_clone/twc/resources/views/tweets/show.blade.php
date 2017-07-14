@extends('layouts.app')
@section('content')
<h1>Tweet</h1>
<p class="lead">{{ $tweet->user->username }}</p> 
<p class="lead">{{ $tweet->body }}</p>
@endsection('content')