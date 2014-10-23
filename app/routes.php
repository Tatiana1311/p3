<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello1');
});

Route::get('/lorem-ipsum/{numberOfParagraphs?}', function(){
	//return "Random Text Generator";
	//return View::make('lorem')->with('numberOfParagraphs', $numberOfParagraphs);
	return View::make('lorem-ipsum');

});

Route::post('/lorem-ipsum-text', function(){

	$numberOfParagraphs = Input::get('numberOfParagraphs');

	$generator = new Badcow\LoremIpsum\Generator();
	$paragraphs = $generator->getParagraphs($numberOfParagraphs);
	//echo implode('<p>', $paragraphs);
	$lorem = implode('<p>', $paragraphs);
	return View::make('lorem-ipsum-text')->with('lorem', $lorem);

});

Route::get('/user-generator/{numberOfUsers?}/{address?}/{birthday?}', function($numberOfUsers = '', $address = '', $birthday = '')
{
	return View::make('user-generator', array(
		'numberOfUsers' => $numberOfUsers,
		'address' => $address,
		'birthday' => $birthday
		));
});

Route::post('/user-generator', function(){

	$numberOfUsers = Input::get('numberOfUsers');
	$address = Input::get('address');
	$birthday = Input::get('birthday');

	return View::make('user-generator-done', array(
		'numberOfUsers' => $numberOfUsers,
		'address' => $address,
		'birthday' => $birthday
		));

});

