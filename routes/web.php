<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('/', function(){
	return view('front');
});

Route::get('/login', function(){
	return view('login.index');
});

Route::post('/login', 'LoginController@login');
Route::get('/logout', 'LoginController@logout');

Route::group(['middleware' => 'auth'], function() {

	Route::get('/siswa', 'SiswaController@index');
	Route::post('/siswa/store', 'SiswaController@store');
	Route::get('/siswa/{id}', 'SiswaController@show');
	Route::get('/siswa/detail/{id}', 'SiswaController@detail');
	Route::patch('/siswa/update/{id}', 'SiswaController@update');

	Route::get('/pendaftaran', 'PendaftaranController@index');
	Route::get('/pendaftaran/setting', 'PendaftaranController@setting');
	Route::get('/pendaftaran/lulus', 'PendaftaranController@lulus');
	Route::post('/pendaftaran/setting', 'PendaftaranController@setting_store');
	Route::get('/pendaftaran/seleksi', 'PendaftaranController@seleksi');
	Route::post('/pendaftaran/store', 'PendaftaranController@store');
	Route::get('/pendaftaran/create', 'PendaftaranController@create');
	Route::get('/pendaftaran/{id}', 'PendaftaranController@show');
	Route::get('/pendaftaran/destroy/{id}', 'PendaftaranController@destroy');
	Route::patch('/pendaftaran/update/{id}', 'PendaftaranController@update');

	Route::get('/guru', 'GuruController@index');
	Route::post('/guru/store', 'GuruController@store');
	Route::get('/guru/create', 'GuruController@create');
	Route::get('/guru/{id}', 'GuruController@show');
	Route::patch('/guru/update/{id}', 'GuruController@update');
	Route::get('/guru/destroy/{id}', 'GuruController@destroy');

	Route::get('/matapelajaran', 'MatapelajaranController@index');
	Route::post('/matapelajaran/store', 'MatapelajaranController@store');
	Route::get('/matapelajaran/create', 'MatapelajaranController@create');
	Route::get('/matapelajaran/{id}', 'MatapelajaranController@show');
	Route::patch('/matapelajaran/update/{id}', 'MatapelajaranController@update');
	Route::get('/matapelajaran/destroy/{id}', 'MatapelajaranController@destroy');

	Route::get('/kelas', 'KelasController@index');
	Route::post('/kelas/store', 'KelasController@store');
	Route::get('/kelas/create', 'KelasController@create');
	Route::get('/kelas/{id}', 'KelasController@show');
	Route::get('/kelas/destroy/{id}', 'KelasController@destroy');
	Route::patch('/kelas/update/{id}', 'KelasController@update');

	Route::get('/jadwal', 'JadwalController@index');
	Route::post('/jadwal/store', 'JadwalController@store');
	Route::get('/jadwal/create', 'JadwalController@create');
	Route::get('/jadwal/{id}', 'JadwalController@show');
	Route::get('/jadwal/destroy/{id}', 'JadwalController@destroy');
	Route::patch('/jadwal/update/{id}', 'JadwalController@update');

	Route::get('/absensi', 'AbsensiController@index');
	Route::get('/absensi/{idkelas}/{idtahun}', 'AbsensiController@show');
	Route::post('/absensi/store', 'AbsensiController@store');

	Route::get('/hari', 'HariController@index');
	Route::post('/hari/store', 'HariController@store');
	Route::get('/hari/create', 'HariController@create');
	Route::get('/hari/{id}', 'HariController@show');
	Route::get('/hari/destroy/{id}', 'HariController@destroy');
	Route::patch('/hari/update/{id}', 'HariController@update');

	Route::get('/jam', 'JamController@index');
	Route::post('/jam/store', 'JamController@store');
	Route::get('/jam/create', 'JamController@create');
	Route::get('/jam/{id}', 'JamController@show');
	Route::get('/jam/destroy/{id}', 'JamController@destroy');
	Route::patch('/jam/update/{id}', 'JamController@update');

	Route::get('/penilaian', 'PenilaianController@index');
	Route::get('/penilaian/kelas/{id}', 'PenilaianController@kelas');
	Route::post('/penilaian/store', 'PenilaianController@store');
	Route::post('/penilaian/berinilai', 'PenilaianController@berinilai');
	Route::get('/penilaian/create', 'PenilaianController@create');
	Route::get('/penilaian/{id}', 'PenilaianController@show');
	Route::get('/penilaian/destroy/{id}', 'PenilaianController@destroy');
	Route::patch('/penilaian/update/{id}', 'PenilaianController@update');
	Route::get('/penilaian/{idkelas}/{idtahun}/{idmapel}', 'PenilaianController@penilaian');

	Route::get('/persentase/penilaian', 'PersentaseController@index');
	Route::patch('/persentase/penilaian/{id}', 'PersentaseController@update');

	Route::get('/tahunajaran', 'TahunAjaranController@index');
	Route::post('/tahunajaran/store', 'TahunAjaranController@store');
	Route::get('/tahunajaran/create', 'TahunAjaranController@create');
	Route::get('/tahunajaran/{id}', 'TahunAjaranController@show');
	Route::get('/tahunajaran/destroy/{id}', 'TahunAjaranController@destroy');
	Route::patch('/tahunajaran/update/{id}', 'TahunAjaranController@update');

	Route::get('/laporan/penilaian', 'LaporanController@penilaian');
	Route::get('/laporan/jadwal', 'LaporanController@jadwal');
	Route::get('/laporan/siswa', 'LaporanController@siswa');
	Route::get('/laporan/absensi', 'LaporanController@absensi');
	Route::get('/laporan/rapor', 'LaporanController@rapor');
	Route::get('/laporan/raporkelas/{kelasid}', 'LaporanController@raporkelas');
	Route::get('/laporan/raporsiswa/{siswaid}/{kelasid}', 'LaporanController@raporsiswa');
	Route::post('/laporan/rapor/store', 'LaporanController@store');
	Route::get('/laporan/cetakrapor/{siswaid}/', 'LaporanController@cetakrapor');
	Route::post('/laporan/cetaksiswa', 'LaporanController@cetaksiswa');
	Route::post('/laporan/cetakjadwal', 'LaporanController@cetakjadwal');
	Route::post('/laporan/cetaknilai', 'LaporanController@cetaknilai');
	Route::post('/laporan/cetakabsensi', 'LaporanController@cetakabsensi');

	Route::get('/profile', 'ProfileController@index');
	Route::post('/profile/store', 'ProfileController@store');

	Route::get('/sejarah', 'SejarahController@index');
	Route::post('/sejarah/store', 'SejarahController@store');

	Route::get('/visimisi', 'VisiMisiController@index');
	Route::post('/visimisi/store', 'VisiMisiController@store');

});
