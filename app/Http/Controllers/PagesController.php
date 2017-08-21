<?php

namespace App\Http\Controllers;

/**
* 
*/
class PagesController extends Controller
{
	
	public function get_index()
	{
		return view('pages.welcome');
	}

	public function get_about()
	{
		return view('pages.about');
	}

	public function get_contact()
	{
		return view('pages.contact');
	}
}