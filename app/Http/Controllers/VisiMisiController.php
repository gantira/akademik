<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VisiMisi;

class VisiMisiController extends Controller
{
    public function index()
    {
    	$data['visimisi'] = VisiMisi::first();
    	return view('visimisi.index', $data);
    }

   	public function store(Request $request)	
   	{
   		VisiMisi::find(1)->update($request->all());

   		return back();
   	}
}
