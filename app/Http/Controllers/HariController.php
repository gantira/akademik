<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hari;

class HariController extends Controller
{
    public function index()
    {
    	$data['hari'] = Hari::all();

    	return view('hari.index', $data);
    }

    public function create()
    {
    	return view('hari.create');
    }

    public function store(Request $request)
    {
    	Hari::create($request->all());

    	return redirect('/hari');
    }

    public function show($id)
    {
    	$data['hari'] = Hari::findOrFail($id);

    	return view('hari.edit', $data);
    }

    public function update(Request $request, $id)
    {
    	$data = Hari::findOrFail($id);
    	$data->fill($request->all());
    	$data->save();

    	return redirect('/hari');
    }

    public function destroy($id)
    {
    	Hari::findOrFail($id)->delete();

    	return back();
    }

}
