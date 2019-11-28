<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sejarah;

class SejarahController extends Controller
{
    public function index()
    {
    	$data['sejarah'] = Sejarah::first();
    	return view('sejarah.index', $data);
    }

   	public function store(Request $request)	
   	{
   		Sejarah::find(1)->update($request->all());

   		return back();
   	}
}
