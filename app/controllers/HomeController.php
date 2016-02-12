<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{
		$lang = 'en';

		return View::make('home')->with('lang', $lang);
		//return View::make('home');
	}

	public function change()
	{

				$lang = 'en';
				$idioma = Input::get('lang');

				if ($idioma ==$lang)
				{

				}
				else {
					$lang = $idioma;
				}

		Lang::setLocale($lang);
		return View::make('home')->with('lang', $lang);
	}

}
