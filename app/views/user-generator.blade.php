@extends('_master')

@section('title')
	Random User Generator
@stop

@section('content')
	<h2>Random User Generator</h2>

{{ Form::open(array(
	'url' => 'user-generator'
)) }}

	{{ Form::label('numberOfUsers', '# of users') }}
 	{{ Form::text('numberOfUsers', $numberOfUsers, array(
		'maxlength' => 1
	)) }} (max = 9)

	<br />

   	{{ Form::label('address', 'Include address?') }}
   	<input type="checkbox" id="address" name="address" value="1" {{ ($address) ? 'checked="checked"' : '' }} >
   	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


	{{ Form::label('birthday', 'Include birthday?') }}
   	<input type="checkbox" id="birthday" name="birthday" value="1" {{ ($birthday) ? 'checked="checked"' : '' }} >
   	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

    <br /><br />

	{{ Form::submit('Get your users!', 
		array('class' => 'btn btn-success'
	)) }}

{{ Form::close() }}
@stop