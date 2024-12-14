<?php

namespace App\Http\Controllers\User\Role;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserRoleController extends Controller
{
	public function render()
	{
		return view('user.role.index');
	}
}
