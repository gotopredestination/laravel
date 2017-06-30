<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class BaseController extends Controller
{
	public function getIndex($id=null){
		return view('index')->with('id',$id);
	}
}

