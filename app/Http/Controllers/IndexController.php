<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
	{
		return view('index');
	}
	
	public function analysis()
	{
		return view('analysis');
	}
	
	public function blank()
	{
		return view('blank');
	}
}
