<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Matapelajaran;
use App\TahunAjaran;

class MatapelajaranController extends Controller
{
    public function index()
    {
        $data['matapelajaran'] = Matapelajaran::all();
    	return view('matapelajaran.index', $data);
    }

    public function create()
    {   
        $data['tahunajaran'] = TahunAjaran::pluck('tahunajaran', 'id');
    	return view('matapelajaran.create', $data);
    }

    public function store(Request $request)
    {   
    	Matapelajaran::create($request->all());

    	return redirect('/matapelajaran');
    }

    public function show($id)
    {
        $data['matapelajaran'] = Matapelajaran::findOrFail($id);
        $data['tahunajaran'] = TahunAjaran::pluck('tahunajaran', 'id');
        return view('matapelajaran.edit', $data);
    }

    public function destroy($id)
    {
        Matapelajaran::findOrFail($id)->delete();

        return back();
    }

    public function update(Request $request, $id)
    {
        $data = Matapelajaran::findOrFail($id);
        $data->fill($request->all());
        $data->save();

        return redirect('/matapelajaran');
    }
}
