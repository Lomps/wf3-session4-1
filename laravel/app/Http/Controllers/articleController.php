<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\articleModel as Articles;

class articleController extends Controller
{
    public function article() {
    	return view ('articles');
    }
}
