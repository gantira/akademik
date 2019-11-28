<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penilaian;
use App\Absensi;
use App\Kelas;
use App\Siswa;
use App\Persentase;
use App\Rapor;
use App\Jadwal;

class LaporanController extends Controller
{
    public function penilaian()
    {
    	$data['penilaian'] = Penilaian::all();

    	return view('laporan.penilaian', $data);
    }

    public function absensi()
    {
    	$data['absensi'] = Absensi::all();

    	return view('laporan.absensi', $data);
    }

    public function rapor()
    {
        $data['kelas'] = Kelas::all();

        return view('laporan.rapor', $data);
    }

    public function jadwal()
    {
        $data['jadwal'] = Jadwal::all();

        return view('laporan.jadwal', $data);
    }

    public function siswa()
    {
        $data['siswa'] = Siswa::all();

        return view('laporan.siswa', $data);
    }

    public function raporkelas($kelasid)
    {
        $data['siswa'] = Penilaian::whereKelasId($kelasid)->groupBy('siswa_id')->get();
        $data['kelas'] = Kelas::findOrFail($kelasid);

        return view('laporan.raporkelas', $data);
    }

    public function raporsiswa($siswaid, $kelasid)
    {
        $data['penilaian'] = Penilaian::whereSiswaId($siswaid)->get();
        $data['absensi'] = Absensi::whereSiswaId($siswaid)->get();
        $data['siswa'] = Siswa::findOrFail($siswaid);
        $data['kelas'] = Kelas::findOrFail($kelasid);
        $data['persentase'] = Persentase::findOrFail(1)->first();

        return view('laporan.raporsiswa', $data);
    }

    public function store(Request $request)
    {
        $data = Rapor::updateOrCreate(['siswa_id'=> $request->siswa_id, 'kelas_id'=> $request->kelas_id,'tahunajaran_id'=> $request->tahunajaran_id,])->update($request->all());

        return json_encode($data);
    }

    public function cetakrapor($siswaid)
    {
        $data['rapor'] = Rapor::whereSiswaId($siswaid)->first();
        $data['penilaian'] = Penilaian::whereSiswaId($siswaid)->get();
        $data['absensi'] = Absensi::whereSiswaId($siswaid)->get();
        $data['siswa'] = Siswa::findOrFail($siswaid);
        $data['persentase'] = Persentase::findOrFail(1)->first();

        return view('laporan.cetak_rapor', $data);
    }

    public function cetaksiswa(Request $request)
    {
        $data['siswa'] = Siswa::whereKelasId($request->kelas_id)->get();
        $data['kelas'] = Kelas::whereId($request->kelas_id)->value('nama_kelas');

        return view('laporan.cetak_siswa', $data);
    }

    public function cetakjadwal(Request $request)
    {
        $data['jadwal'] = Jadwal::whereKelasId($request->kelas_id)->orderBy('jam_id')->get();
        $data['kelas'] = Kelas::whereId($request->kelas_id)->value('nama_kelas');

        return view('laporan.cetak_jadwal', $data);
    }

    public function cetaknilai(Request $request)
    {
        $data['penilaian'] = Penilaian::whereKelasId($request->kelas_id)->orderBy('siswa_id')->get();
        $data['kelas'] = Kelas::whereId($request->kelas_id)->value('nama_kelas');

        return view('laporan.cetak_nilai', $data);
    }

    public function cetakabsensi(Request $request)
    {
        $data['absensi'] = Absensi::whereKelasId($request->kelas_id)->get();
        $data['kelas'] = Kelas::whereId($request->kelas_id)->value('nama_kelas');

        return view('laporan.cetak_absensi', $data);
    }

}
