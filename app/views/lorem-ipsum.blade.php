@extends('_master')

@section('title')
	Lorem Ipsum Text Generator
@stop

@section('content')
	<h2>Lorem Ipsum Text Generator</h2>

<p> {{ Form::open(array('url' => '/lorem-ipsum-text', 'method' => 'POST')); }}
	{{ Form::label('numberOfParagraphs', '# of Paragraphs') }}
	{{ Form::text('numberOfParagraphs', null, array('maxlength' => '1')) }}
	(Max is 9) </p>

	{{Form::submit('Generate Text!');}}
	{{Form::close()}}

@stop