<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persentase;

class PersentaseController extends Controller
{
    public function index()
    {
        $data['persentase'] = Persentase::findOrFail(1);
        return view('penilaian.persentase', $data);   
    }

    public function update(Request $request, $id)
    {
    	Persentase::findOrFail(1)->update($request->all());

    	return back();
    }
}
