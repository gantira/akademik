<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jam;

class JamController extends Controller
{
    public function index()
    {
    	$data['jam'] = Jam::all();

    	return view('jam.index', $data);
    }

    public function create()
    {
    	return view('jam.create');
    }

    public function store(Request $request)
    {
    	Jam::create($request->all());

    	return redirect('/jam');
    }

    public function show($id)
    {
    	$data['jam'] = Jam::findOrFail($id);

    	return view('jam.edit', $data);
    }

    public function update(Request $request, $id)
    {
    	$data = Jam::findOrFail($id);
    	$data->fJll($request->all());
    	$data->save();

    	return redirect('/jam');
    }

    public function destroy($id)
    {
    	Jam::findOrFail($id)->delete();

    	return back();
    }

}
