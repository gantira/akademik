<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelas;
use App\Guru;
use App\TahunAJaran;

class KelasController extends Controller
{
    public function index()
    {
        $data['kelas'] = Kelas::all();
        $data['total'] = Kelas::sum('kapasitas');
    	return view('kelas.index', $data);
    }

    public function create()
    {    
        $data['guru'] = Guru::pluck('nama', 'id');
        $data['tahunajaran'] = TahunAJaran::pluck('tahunajaran', 'id');
    	return view('kelas.create', $data);
    }

    public function store(Request $request)
    {   
    	Kelas::create($request->all());

    	return redirect('/kelas');
    }

    public function show($id)
    {
        $data['kelas'] = Kelas::findOrFail($id);
        $data['guru'] = Guru::pluck('nama', 'id');
        $data['tahunajaran'] = TahunAJaran::pluck('tahunajaran', 'id');
        return view('kelas.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $data = Kelas::findOrfail($id);
        $data->fill($request->all());
        $data->save();

        return redirect('/kelas');
    }

    public function destroy($id)
    {
        kelas::findOrfail($id)->delete();

        return redirect('/kelas');
    }

}
