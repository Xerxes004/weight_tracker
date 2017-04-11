<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Run;

class WeightDataController extends Controller
{
	public function index() {
		return redirect('runs');
	}
}
