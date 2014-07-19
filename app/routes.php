<?php

var_dump($app);

die();

Route::get('/', function()
{
	return View::make('hello');
});
