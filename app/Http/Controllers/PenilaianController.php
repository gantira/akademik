<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jadwal;
use App\Kelas;
use App\TahunAjaran;
use App\Matapelajaran;
use App\Siswa;
use App\Setting;
use App\Penilaian;
use App\Persentase;

class PenilaianController extends Controller
{
    public function index()
    {	
    	$data['kelas'] = Kelas::all();
    	return view('penilaian.index', $data);
    }

    public function kelas($id)
    {
    	$data['kelas'] = Kelas::findOrFail($id);

    	return view('penilaian.kelas', $data);
    }

    public function penilaian($idkelas, $idtahun, $idmapel)
    {
        $data['kelas'] = Kelas::findOrFail($idkelas);
        $data['tahunajaran'] = TahunAjaran::findOrFail($idtahun);
        $data['matapelajaran'] = Matapelajaran::findOrFail($idmapel);
        $data['siswa'] = Siswa::whereKelasId($idkelas)->get();
        $data['persentase'] = Persentase::findOrFail(1);

        return view('penilaian.penilaian', $data);
    }

    public function berinilai(Request $request)
    {
        $data = Penilaian::updateOrCreate(['siswa_id' => $request->siswa_id, 'matapelajaran_id' => $request->matapelajaran_id, 'tahunajaran_id' => $request->tahunajaran_id, 'kelas_id' => $request->kelas_id], $request->all());

        return json_encode($data);
    }

    
}
