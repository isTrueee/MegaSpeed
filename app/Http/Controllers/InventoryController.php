<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InventoryController extends Controller
{
	public function render()
	{
		return view('inventory.index');
	}
}
