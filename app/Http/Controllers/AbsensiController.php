<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelas;
use App\Siswa;
use App\TahunAjaran;
use App\Absensi;

class AbsensiController extends Controller
{
    public function index()
    {
    	$data['kelas'] = Kelas::all();
    	return view('absensi.index', $data);
    }

    public function show($idkelas, $idtahun)
    {
        $data['siswa'] = Siswa::whereKelasId($idkelas)->get();
    	$data['kelas'] = Kelas::findOrFail($idkelas);
		$data['tahunajaran'] = TahunAjaran::findOrFail($idtahun);

    	return view('absensi.absensi', $data);
    }

    public function store(Request $request)
    {
        $data = Absensi::updateOrCreate(['siswa_id' => $request->siswa_id, 'tanggal' => $request->tanggal], $request->all());

        return json_encode($data);
    }
}
