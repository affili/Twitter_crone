@extends('layouts.app')
@section('content')
    <!-- Part 1: Wrap all page content here -->
    <div id="wrap">

      <!-- Begin page content -->
      <div class="container">
        <div class="page-header">
          <h1>Upload Photo</h1>
        </div>
        {!! Form::open(['route' => 'photos.store', 'files' => true]) !!}
        {!! Form::label('fileName', 'アップロード') !!}
        {!! Form::file('fileName') !!}
        {!! Form::submit('アップロードする') !!}
        {!! Form::close() !!}

      </div>
    </div>
@endsection('content')