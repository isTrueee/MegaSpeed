<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
	public function render()
	{
		return view('index');
	}
}
