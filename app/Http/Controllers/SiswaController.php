<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use File;

class SiswaController extends Controller
{
    public function index()
    {
        $data['siswa'] = Siswa::orderBy('kelas_id')->get();
    	return view('siswa.index', $data);
    }

    public function create()
    {   
    	return view('siswa.create');
    }

    public function store(Request $request)
    {   
        $destinationPath = 'upload/photo/siswa/';
        $fileName = time() . '.' . $request->file('photo')->getClientOriginalExtension();
        $request->file('photo')->move($destinationPath, $fileName);

        $data = $request->all();
        $data['photo'] = $destinationPath . $fileName;

    	Siswa::create($data);

    	return back();
    }

    public function show($id)
    {
        $data['siswa'] = Siswa::findOrFail($id);

        return view('siswa.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $data = Siswa::findOrfail($id);

        if ($request->file('file_ijazah')) {
            $destinationPath = 'upload/file_ijazah/siswa/';
            $fileName = time() . '.' . $request->file('file_ijazah')->getClientOriginalExtension();
            $request->file('file_ijazah')->move($destinationPath, $fileName);
            
            File::delete($data->file_ijazah);
            $data->fill($request->all());
            $data->file_ijazah = $destinationPath . $fileName;
        }else{
            $data->fill($request->all());
        }
        $data->save();

        return back();
    }


    public function detail($id)
    {
        $data['siswa'] = Siswa::findOrfail($id);

        return view('laporan.cetak_detail_siswa', $data);
    }
}
