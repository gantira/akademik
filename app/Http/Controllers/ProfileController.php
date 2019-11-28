<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;

class ProfileController extends Controller
{
    public function index()
    {
    	$data['profile'] = Profile::first();
    	return view('profile.index', $data);
    }

   	public function store(Request $request)	
   	{
   		Profile::find(1)->update($request->all());

   		return back();
   	}
}
