@extends('_master')

@section('title')
	Random User Generator
@stop

@section('content')
	<h2>Here are your users:</h2>

	<?php
		$faker = Faker\Factory::create();
		for ($i=0; $i < $numberOfUsers; $i++) {
  			echo $faker->name . '<br />';

  	    if ($address) {
  				echo $faker->address . '<br />';
  			}

  	    if($birthday) {
  		    echo Faker\Provider\DateTime::date($format = 'Y-m-d', $max = 'now') . '<br /><br />';
  	    }
    }
  	
  	?>

@stop