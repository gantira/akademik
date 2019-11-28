<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PendaftaranRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nama_lengkap' => 'required',
            'nama_panggilan' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jk' => 'required',
            'agama' => 'required',
            'anak_ke' => 'required',
            'kandung' => 'required',
            'tiri' => 'required',
            'angkat' => 'required',
            'anak_dalam_keluarga' => 'required',
            'bahasa' => 'required',
            'alamat' => 'required',
            'kelurahan' => 'required',
            'kecamatan' => 'required',
            'kota' => 'required',
            'kode_pos' => 'required',
            'telepon' => 'required',
            'tinggal' => 'required',
            'transportasi' => 'required',
            'jarak_sekolah' => 'required',
            'kg' => 'required',
            'cm' => 'required',
            'golongan_darah' => 'required',
            'penyakit_berat' => 'required',
            'sd_nama' => 'required',
            'sd_no_ijazah' => 'required',
            'sd_no_ijazah_tahun' => 'required',
            'sd_lama_belajar' => 'required',
            'smp_nama' => 'required',
            'smp_no_ijazah' => 'required',
            'smp_no_ijazah_tahun' => 'required',
            'no_skhun' => 'required',
            'no_skhun_tahun' => 'required',
            'lama_belajar' => 'required',
            'nama_sekolah_pindahan' => 'required',
            'tanggal_diterima' => 'required',
            'nama_ayah' => 'required',
            'tempat_lahir_ayah' => 'required',
            'tanggal_lahir_ayah' => 'required',
            'pekerjaan_ayah' => 'required',
            'pendidikan_ayah' => 'required',
            'penghasilan_ayah' => 'required',
            'telepon_ayah' => 'required',
            'alamat_ayah' => 'required',
            'nama_ibu' => 'required',
            'tempat_lahir_ibu' => 'required',
            'tanggal_lahir_ibu' => 'required',
            'pekerjaan_ibu' => 'required',
            'pendidikan_ibu' => 'required',
            'penghasilan_ibu' => 'required',
            'telepon_ibu' => 'required',
            'alamat_ibu' => 'required',
            'hobby' => 'required',
            'cita_cita' => 'required',
            'file_ijazah' => 'required',
            'nilai_ijazah' => 'required'
        ];
    }
}
