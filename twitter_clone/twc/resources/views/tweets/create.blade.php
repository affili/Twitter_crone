@extends('layouts.app')
@section('content')
    <!-- Part 1: Wrap all page content here -->
    <div id="wrap">

      <!-- Begin page content -->
      <div class="container">
        <div class="page-header">
          <h1>Create Tweet</h1>
        </div>

        {!! Form::open(['url' => 'tweets', 'files' => true, 'method' => 'post']) !!}
        <div class='form-group'>
          {!! Form::label('body', 'Body') !!}
          {!! Form::text('body', null, ['class' => 'form-control']) !!}
        </div>
        {!! Form::label('fileName', 'アップロード') !!}
        {!! Form::file('fileName') !!}
        <div class='form-group'>
          {!! Form::submit('Tweet', ['class' => 'btn btn-primary form-control']) !!}
        </div>
        {!! Form::close() !!}
      </div>
    </div>
@endsection('content')