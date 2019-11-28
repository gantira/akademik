<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelas;
use App\Jadwal;
use App\Matapelajaran;
use App\Guru;
use App\Hari;
use App\Jam;
use App\TahunAjaran;
use Session;

class JadwalController extends Controller
{
    public function index()
    {
    	$data['jadwal'] = Jadwal::all();

    	return view('jadwal.index', $data);
    }

    public function create()
    {
        $data['kelas'] = Kelas::pluck('nama_kelas', 'id');
        $data['matapelajaran'] = Matapelajaran::pluck('nama_matapelajaran', 'id');
        $data['guru'] = Guru::pluck('nama', 'id');
        $data['hari'] = Hari::pluck('hari', 'id');
        $data['tahunajaran'] = TahunAjaran::pluck('tahunajaran', 'id');
        $data['jam'] = Jam::pluck('jam', 'id');
    	
    	return view('jadwal.create', $data);
    }

    public function store(Request $request)
    {
        $cek = Jadwal::whereHariId($request->hari_id)->whereKelasId($request->kelas_id)->whereJamId($request->jam_id)->whereGuruId($request->guru_id)->first();
        if ($request->hari_id == 1 && $request->jam_id == 1) { // Jadwal Upacara
            Session::flash('warning_message', 'Jadwal Upacara. Tidak ada jadwal mengajar selama upacara.');
            return redirect('/jadwal');
        } elseif ($request->jam_id == 4) {
            Session::flash('warning_message', 'Jam Istirahat. Tidak ada jadwal mengajar selama istirahat.');
            return redirect('/jadwal');
        } elseif ($request->jam_id == 9) {
            Session::flash('warning_message', 'Waktu Solat Dhuzur. Tidak ada jadwal mengajar selama beribadah.');
            return redirect('/jadwal');
        }


        if (count($cek)) {
            Session::flash('warning_message', 'Mohon maaf penjadwalan tidak dapat ditambahkan, dikarenakan terdapat jadwal yang bentrok.');
            Session::flash('data', '<li>Guru : '. $cek->guru->nama . '</li><li>Pelajaran : '. $cek->matapelajaran->nama_matapelajaran . '</li><li>Kelas : '. $cek->kelas->nama_kelas . '</li><li>Waktu : ' . $cek->hari->hari . ' ' .$cek->jam->jam);
            return redirect('/jadwal');
            
        }else {
            Session::flash('message', 'Tambah jadwal berhasil.');
            Jadwal::create($request->all());
        }

        return redirect('/jadwal');
    }

    public function show($id)
    {   
        $data['kelas'] = Kelas::pluck('nama_kelas', 'id');
        $data['matapelajaran'] = Matapelajaran::pluck('nama_matapelajaran', 'id');
        $data['guru'] = Guru::pluck('nama', 'id');
        $data['hari'] = Hari::pluck('hari', 'id');
        $data['jam'] = Jam::pluck('jam', 'id');
        $data['tahunajaran'] = TahunAjaran::pluck('tahunajaran', 'id');
        $data['jadwal'] = Jadwal::findOrFail($id);

        return view('jadwal.edit', $data);
    }

    public function destroy($id)
    {
        Jadwal::findOrFail($id)->delete();

        return back();
    }

    public function update(Request $request, $id)
    {
        $data = Jadwal::findOrFail($id);
        $data->fill($request->all());
        $data->save();

        return redirect('/jadwal');

    }
}
