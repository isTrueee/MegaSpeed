<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
	public function render()
	{
		return view('project.index');
	}
}
