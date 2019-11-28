<!DOCTYPE html>
<html>
<head>
	<title>Cetak Rapor</title>
	{{ Html::style('semantic/semantic.min.css') }}
</head>
<body onload="window.print()">

	<div class="ui basic segment">
		<div class="ui equal width form">
		  <div class="fields">
		    <div class="field">
		    	
		    <b>
				Nama Sekolah<br>
				Alamat<br>
				Nama Siswa<br>
				Nomor Induk/NISN
		    </b>
		    </div>
		    <div class="field">
				: SMA PURAGABAYA<br>
				: Jln. H. Yasin No.59<br>
				: {{ strtoupper($siswa->nama_lengkap) }}<br>
				: {{ $siswa->nis }}
		    </div>
		    <div class="field">
		    <b>
				Kelas<br>
				Semester<br>
				Tahun Ajaran<br>
			</b>
		    </div>

		    <div class="field">
				: {{ $siswa->kelas->nama_kelas }}<br>
				: I<br>
				: {{ $siswa->kelas->tahunajaran->tahunajaran }}<br>
		    </div>
		  </div>
		</div>
		    

		<div class="ui divider"></div>

		<div class="ui equal width form">
		  <div class="fields">
		    <div class="field">
		    	
		    <b>
				Nama Panggilan<br>
				Tempat Lahir<br>
				JK<br>
				Agama
		    </b>
		    </div>
		    <div class="field">
				: {{ $siswa->nama_panggilan }}<br>
				: {{ $siswa->tempat_lahir }}<br>
				: {{ $siswa->jk }}<br>
				: {{ $siswa->agama }}<br>
		    </div>
		    <div class="field">
		    <b>
				Anak Ke<br>
				Saudara Kandung<br>
				Saudara Tiri<br>
				Saudara Angkat<br>
				Anak Dalam Keluarga<br>
				Bahasa Sehari hari<br>
			</b>
		    </div>

		    <div class="field">
				: {{ $siswa->anak_ke }}<br>
				: {{ $siswa->kandung }}<br>
				: {{ $siswa->tiri }}<br>
				: {{ $siswa->angkat }}<br>
				: {{ $siswa->anak_dalam_keluarga }}<br>
				: {{ $siswa->bahasa }}<br>
		    </div>
		  </div>
		</div>

		<div class="ui equal width form">
		  <div class="fields">
		    <div class="field">
		    <b>
				Alamat<br>
				Kelurahan<br>
				Kecamatan<br>
				Kota<br>
				Kode Pos<br>
			</b>
		    </div>

		    <div class="field">
				: {{ $siswa->alamat }}<br>
				: {{ $siswa->kelurahan }}<br>
				: {{ $siswa->kecamatan }}<br>
				: {{ $siswa->kota }}<br>
				: {{ $siswa->kode_pos }}<br>
		    </div>
		    <div class="field">
		    <b>
				Telepon<br>
				Tinggal<br>
				Transportasi<br>
				Jarak Ke Sekolah<br>
		    </b>
		    </div>
		    <div class="field">
				: {{ $siswa->telepon }}<br>
				: {{ $siswa->tinggal }}<br>
				: {{ $siswa->transportasi }}<br>
				: {{ $siswa->jarak_sekolah }}<br>
		    </div>
		  </div>
		</div>

		<div class="ui equal width form">
		  <div class="fields">
		    <div class="field">
		    <b>
				Berat<br>
				Tinggi<br>
				Golongan Darah<br>
				Penyakit<br>
			</b>
		    </div>

		    <div class="field">
				: {{ $siswa->kg }}<br>
				: {{ $siswa->cm }}<br>
				: {{ $siswa->golongan_darah }}<br>
				: {{ $siswa->penyakit_berat }}<br>
		    </div>
		    <div class="field">
		    <b>
				Asal Sekolah Dasar<br>
				No Ijazah<br>
				Lama Belajar<br>
		    </b>
		    </div>
		    <div class="field">
				: {{ $siswa->sd_nama }}<br>
				: {{ $siswa->sd_no_ijazah }} {{ $siswa->sd_no_ijazah_tahun }}<br>
				: {{ $siswa->sd_lama_belajar }}<br>
		    </div>
		  </div>
		</div>

		<div class="ui equal width form">
		  <div class="fields">
		    <div class="field">
		    <b>
				Asal Sekolah Menengah Pertama<br>
				No Ijazah<br>
				No. SKHUN<br>
				Lama Belajar<br>
				Nama Sekolah Pindahan<br>
				Tanggal Diterima<br>
			</b>
		    </div>

		    <div class="field">
				: {{ $siswa->smp_nama }}<br>
				: {{ $siswa->smp_no_ijazah }} {{ $siswa->smp_no_ijazah_tahun }}<br>
				: {{ $siswa->no_skhun }} {{ $siswa->no_skhun_tahun }}<br>
				: {{ $siswa->lama_belajar }} Tahun<br>
				: {{ $siswa->nama_sekolah_pindahan }}<br>
				: {{ $siswa->tanggal_diterima }}<br>
		    </div>
		  </div>
		</div>

		<div class="ui divider"></div>

		<div class="ui equal width form">
		  <div class="fields">
		    <div class="field">
		    <b>
				Nama Ayah Kandung<br>
				Tempat Lahir<br>
				Tanggal Lahir<br>
				Pekerjaan<br>
				Pendidikan<br>
				Penghasilan<br>
				Telepon<br>
				Alamat<br>
				Penghasilan<br>
			</b>
		    </div>

		    <div class="field">
				: {{ $siswa->nama_ayah }}<br>
				: {{ $siswa->tempat_lahir_ayah }}<br>
				: {{ $siswa->tanggal_lahir_ayah }}<br>
				: {{ $siswa->pekerjaan_ayah }}<br>
				: {{ $siswa->pendidikan_ayah }}<br>
				: {{ $siswa->penghasilan_ayah }}<br>
				: {{ $siswa->telepon_ayah }}<br>
				: {{ $siswa->alamat_ayah }}<br>
				: {{ $siswa->penghasilan_ayah }}<br>
		    </div>

		    <div class="field">
		    <b>
				Nama Ibu Kandung<br>
				Tempat Lahir<br>
				Tanggal Lahir<br>
				Pekerjaan<br>
				Pendidikan<br>
				Penghasilan<br>
				Telepon<br>
				Alamat<br>
				Penghasilan<br>
			</b>
		    </div>

		    <div class="field">
				: {{ $siswa->nama_ibu }}<br>
				: {{ $siswa->tempat_lahir_ibu }}<br>
				: {{ $siswa->tanggal_lahir_ibu }}<br>
				: {{ $siswa->pekerjaan_ibu }}<br>
				: {{ $siswa->pendidikan_ibu }}<br>
				: {{ $siswa->penghasilan_ibu }}<br>
				: {{ $siswa->telepon_ibu }}<br>
				: {{ $siswa->alamat_ibu }}<br>
				: {{ $siswa->penghasilan_ibu }}<br>
		    </div>

		  </div>
		</div>

		<div class="ui divider"></div>
		
		<div class="ui equal width form">
		  <div class="fields">
		    <div class="field">
		    <b>
				Hobby<br>
				Cita-Cita<br>
			</b>
		    </div>

		    <div class="field">
				: {{ $siswa->hobby }}<br>
				: {{ $siswa->cita_cita }}<br>
		    </div>

		     <div class="field">
		    <b>
				File Ijazah<br>
				Nilai Ijazah<br>
			</b>
		    </div>

		    <div class="field">
				: <img src="{{ asset($siswa->file_ijazah) }}"><br>
				: {{ $siswa->nilai_ijazah }}<br>
		    </div>

		  </div>
		</div>

	
	</div>
	<br>

	<script type="text/javascript">
		setTimeout(function(){ 
			window.history.back();

		}, 200);
	</script>  	

</body>
</html>