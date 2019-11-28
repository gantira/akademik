<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pendaftaran;
use App\Kelas;
use App\Siswa;
use App\SettingPenerimaan;
use File;
use Carbon\Carbon;
use App\Http\Requests\PendaftaranRequest;

class PendaftaranController extends Controller
{
    public function index()
    {   
        $data['pendaftaran'] = Pendaftaran::orderBy('nilai_ijazah', 'desc')->get();
    	return view('pendaftaran.index', $data);
    }

    public function create()
    {   
    	return view('pendaftaran.create');
    }

    public function store(Request $request)
    {   
        if ($request->file('file_ijazah')) {
            $destinationPath = 'upload/file_ijazah/siswa/';
            $fileName = time() . '.' . $request->file('file_ijazah')->getClientOriginalExtension();
            $request->file('file_ijazah')->move($destinationPath, $fileName);
            
            $data = $request->all();
            $data['file_ijazah'] = $destinationPath . $fileName;
           
            Pendaftaran::create($data);
        }else{
            Pendaftaran::create($request->all());
        }

    	return back();
    }

    public function show($id)
    {
        $data['pendaftaran'] = Pendaftaran::findOrFail($id);

        return view('pendaftaran.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $data = Pendaftaran::findOrfail($id);

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

    public function destroy($id)
    {
        Pendaftaran::findOrfail($id)->delete();

        return redirect('/pendaftaran');
    }

    public function seleksi()
    {
        $totalpenerimaan = Kelas::sum('kapasitas');

        foreach (Kelas::all() as $perkelas) {
            foreach (Pendaftaran::orderBy('nilai_ijazah', 'desc')->get() as $value) {

                if (Siswa::whereKelasId($perkelas->id)->count() < $perkelas->kapasitas) {
                    if ($value->nilai_ijazah > SettingPenerimaan::value('nilai_kelulusan')) {
                        
                    Siswa::create([
                        'nis'       => (Carbon::now()->format('y')).(Carbon::now()->format('y')+1).'10'.(Siswa::max('id')+1),
                        'kelas_id'  =>  $perkelas->id,
                        'nama_lengkap'  =>  $value->nama_lengkap,
                        'nama_panggilan'  =>  $value->nama_panggilan,
                        'tempat_lahir'  =>  $value->tempat_lahir,
                        'tanggal_lahir'  =>  $value->tanggal_lahir,
                        'jk'  =>  $value->jk,
                        'agama'  =>  $value->agama,
                        'anak_ke'  =>  $value->anak_ke,
                        'kandung'  =>  $value->kandung,
                        'tiri'  =>  $value->tiri,
                        'angkat'  =>  $value->angkat,
                        'anak_dalam_keluarga'  =>  $value->anak_dalam_keluarga,
                        'bahasa'  =>  $value->bahasa,
                        'alamat'  =>  $value->alamat,
                        'kelurahan'  =>  $value->kelurahan,
                        'kecamatan'  =>  $value->kecamatan,
                        'kota'  =>  $value->kota,
                        'kode_pos'  =>  $value->kode_pos,
                        'telepon'  =>  $value->telepon,
                        'tinggal'  =>  $value->tinggal,
                        'transportasi'  =>  $value->transportasi,
                        'jarak_sekolah'  =>  $value->jarak_sekolah,
                        'kg'  =>  $value->kg,
                        'cm'  =>  $value->cm,
                        'golongan_darah'  =>  $value->golongan_darah,
                        'penyakit_berat'  =>  $value->penyakit_berat,
                        'sd_nama'  =>  $value->sd_nama,
                        'sd_no_ijazah'  =>  $value->sd_no_ijazah,
                        'sd_no_ijazah_tahun'  =>  $value->sd_no_ijazah_tahun,
                        'sd_lama_belajar'  =>  $value->sd_lama_belajar,
                        'smp_nama'  =>  $value->smp_nama,
                        'smp_no_ijazah'  =>  $value->smp_no_ijazah,
                        'smp_no_ijazah_tahun'  =>  $value->smp_no_ijazah_tahun,
                        'no_skhun'  =>  $value->no_skhun,
                        'no_skhun_tahun'  =>  $value->no_skhun_tahun,
                        'lama_belajar'  =>  $value->lama_belajar,
                        'nama_sekolah_pindahan'  =>  $value->nama_sekolah_pindahan,
                        'tanggal_diterima'  =>  $value->tanggal_diterima,
                        'nama_ayah'  =>  $value->nama_ayah,
                        'tempat_lahir_ayah'  =>  $value->tempat_lahir_ayah,
                        'tanggal_lahir_ayah'  =>  $value->tanggal_lahir_ayah,
                        'pekerjaan_ayah'  =>  $value->pekerjaan_ayah,
                        'pendidikan_ayah'  =>  $value->pendidikan_ayah,
                        'penghasilan_ayah'  =>  $value->penghasilan_ayah,
                        'telepon_ayah'  =>  $value->telepon_ayah,
                        'alamat_ayah'  =>  $value->alamat_ayah,
                        'nama_ibu'  =>  $value->nama_ibu,
                        'tempat_lahir_ibu'  =>  $value->tempat_lahir_ibu,
                        'tanggal_lahir_ibu'  =>  $value->tanggal_lahir_ibu,
                        'pekerjaan_ibu'  =>  $value->pekerjaan_ibu,
                        'pendidikan_ibu'  =>  $value->pendidikan_ibu,
                        'penghasilan_ibu'  =>  $value->penghasilan_ibu,
                        'telepon_ibu'  =>  $value->telepon_ibu,
                        'alamat_ibu'  =>  $value->alamat_ibu,
                        'hobby'  =>  $value->hobby,
                        'cita_cita'  =>  $value->cita_cita,
                        'file_ijazah'  =>  $value->file_ijazah,
                        'nilai_ijazah'  =>  $value->nilai_ijazah,
                    ]);

                    Pendaftaran::whereId($value->id)->delete();
                    }
                }
                
            }
            
        }

        return back();

    }

    public function setting()
    {   
        $data['setting'] = SettingPenerimaan::findOrfail(1);
        return view('pendaftaran.setting', $data);
    }

    public function setting_store(Request $request)
    {
        SettingPenerimaan::findOrfail(1)->update($request->all());

        return back();
    }

    public function lulus()
    {
        $data['lulus'] = Siswa::all();

        return view('pendaftaran.lulus', $data);
    }

}

