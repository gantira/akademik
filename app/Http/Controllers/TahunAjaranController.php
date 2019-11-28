<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TahunAjaran;

class TahunAjaranController extends Controller
{
    public function index()
    {
    	$data['tahunajaran'] = TahunAjaran::all();

    	return view('tahunajaran.index', $data);
    }

    public function create()
    {
    	return view('tahunajaran.create');
    }

    public function store(Request $request)
    {
    	TahunAjaran::create($request->all());

    	return redirect('/tahunajaran');
    }

    public function show($id)
    {
    	$data['tahunajaran'] = TahunAjaran::findOrFail($id);

    	return view('tahunajaran.edit', $data);
    }

    public function update(Request $request, $id)
    {
    	$data = TahunAjaran::findOrFail($id)->update($request->all());

    	return redirect('/tahunajaran');
    }

    public function destroy($id)
    {
    	TahunAjaran::findOrFail($id)->delete();

    	return back();
    }

}
