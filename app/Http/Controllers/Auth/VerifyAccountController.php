<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VerifyAccountController extends Controller
{
	public function render()
	{
		return view('auth.verify-account');
	}
}