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
				: {{ $rapor->kelas->nama_kelas }}<br>
				: II<br>
				: {{ $rapor->kelas->tahunajaran->tahunajaran }}<br>
		    </div>
		  </div>
		</div>
		    

		<div class="ui divider"></div>

		<div class="ui form">
			<div class="field">
				<label>A. Sikap</label>
				<textarea id="sikap" onblur="rapor()">{{ $siswa->rapor->max('sikap') }}</textarea>
			</div>

			<br>

			<div class="field">
				<label>B. Pengetahuan</label>
				<table class="ui celled structured table">
					<thead>
						<tr align="center">
							<th rowspan="2">Mata Pelajaran</th>
							<th colspan="4">Pengetahuan</th>
							<th rowspan="2">Deskripsi</th>
						</tr>
						<tr align="center">
							<th>KB</th>
							<th>Angka</th>
							<th>Predikat</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($penilaian as $no => $row)
						<tr>
							<td>{{ $row->matapelajaran->nama_matapelajaran }}</td>
							<td class="center aligned">{{ $row->matapelajaran->kkm }}</td>
							<td class="center aligned">{{ ($row->tugas*$persentase->tugas/100)+
								   ($row->quiz*$persentase->quiz/100)+
								   ($row->uts*$persentase->uts/100)+
								   ($row->uas*$persentase->uas/100) }}</td>
							<td class="center aligned">
							@if ((($row->tugas*$persentase->tugas/100)+
							    ($row->quiz*$persentase->quiz/100)+
							    ($row->uts*$persentase->uts/100)+
							    ($row->uas*$persentase->uas/100)) > 80)
								A
							@elseif	((($row->tugas*$persentase->tugas/100)+
							    ($row->quiz*$persentase->quiz/100)+
							    ($row->uts*$persentase->uts/100)+
							    ($row->uas*$persentase->uas/100)) > 60)
								B
							@elseif	((($row->tugas*$persentase->tugas/100)+
							    ($row->quiz*$persentase->quiz/100)+
							    ($row->uts*$persentase->uts/100)+
							    ($row->uas*$persentase->uas/100)) > 40)
								C
							@else
								D
							@endif
							</td>
							<td colspan="2" width="20%" >{{ $row->catatan }}</td>
						</tr>
						@endforeach
						</div>

						
					</tbody>
				</table>
			</div>

			<br>

			<div class="field">
				<label>C. Extra Kurikuler</label>
				<table class="ui compact celled table">
					<thead>
						<tr>
							<th>No</th>
							<th>Kegiatan Extra kurikuler</th>
							<th>Keterangan</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td><div class="ui transparent input">
								  	<input type="text" name="" id="extra1" onblur="rapor()" value="{{ $siswa->rapor->max('extra1') }}">
								</div>
							</td>
							<td><div class="ui transparent input">
								  	<input type="text" name="" id="extra_keterangan1" onblur="rapor()" value="{{ $siswa->rapor->max('extra_keterangan1') }}">
								</div>
							</td>
						</tr>
						<tr>
							<td>2</td>
							<td><div class="ui transparent input">
								  	<input type="text" name="" id="extra2" onblur="rapor()" value="{{ $siswa->rapor->max('extra2') }}">
								</div>
							</td>
							<td><div class="ui transparent input">
								  	<input type="text" name="" id="extra_keterangan2" onblur="rapor()" value="{{ $siswa->rapor->max('extra_keterangan2') }}">
								</div>
							</td>
						</tr>
						<tr>
							<td>3</td>
							<td><div class="ui transparent input">
								  	<input type="text" id="extra3" name="" onblur="rapor()" value="{{ $siswa->rapor->max('extra3') }}">
								</div>
							</td>
							<td><div class="ui transparent input">
								  	<input type="text" name="" id="extra_keterangan3" onblur="rapor()" value="{{ $siswa->rapor->max('extra_keterangan3') }}">
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>

			<br>

			<div class="field">
				<label>D. Prestasi</label>
				<table class="ui compact celled table">
					<thead>
						<tr>
							<th>No</th>
							<th>Jenis Prestasi</th>
							<th>Keterangan</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td><div class="ui transparent input">
								  	<input type="text" name="" id="prestasi1" onblur="rapor()" value="{{ $siswa->rapor->max('prestasi1') }}"> 
								</div>
							</td>
							<td><div class="ui transparent input">
								  	<input type="text" name="" id="prestasi_keterangan1" onblur="rapor()" value="{{ $siswa->rapor->max('prestasi_keterangan1') }}">
								</div>
							</td>
						</tr>
						<tr>
							<td>2</td>
							<td><div class="ui transparent input">
								  	<input type="text" name="" id="prestasi2" onblur="rapor()" value="{{ $siswa->rapor->max('prestasi2') }}"> 
								</div>
							</td>
							<td><div class="ui transparent input">
								  	<input type="text" name="" id="prestasi_keterangan2" onblur="rapor()" value="{{ $siswa->rapor->max('prestasi_keterangan2') }}">
								</div>
							</td>
						</tr>
						<tr>
							<td>3</td>
							<td><div class="ui transparent input">
								  	<input type="text" name="" id="prestasi3" onblur="rapor()" value="{{ $siswa->rapor->max('prestasi3') }}"> 
								</div>
							</td>
							<td><div class="ui transparent input">
								  	<input type="text" name="" id="prestasi_keterangan3" onblur="rapor()" value="{{ $siswa->rapor->max('prestasi_keterangan3') }}">
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>

			<br>

			<div class="six wide field">
				<label>E. Ketidakhadiran</label>
				<table class="ui table">
					<tr>
						<td>Sakit</td>
						<td>: {{ $absensi->where('keterangan','Sakit')->count() }}</td>
					</tr>
					<tr>
						<td>Tanpa Keterangan</td>
						<td>: {{ $absensi->where('keterangan','Tanpa Keterangan')->count() }}</td>
					</tr>
				</table>
			</div>

			<br>

			<div class="field">
				<label>F. Catatan Wali Kelas</label>
				<textarea id="catatan_walikelas" onblur="rapor()">{{ $siswa->rapor->max('catatan_walikelas') }}</textarea>
			</div>

			<br>

			<div class="field">
				<label>G. Tanggapan Orang tua/Wali</label>
				<textarea id="tanggapan_orangtua" onblur="rapor()">{{ $siswa->rapor->max('tanggapan_orangtua') }}</textarea>
			</div>

			<br>

			<div class="field">
				<label>Keputusan :</label>
				<p>Berdasarkan hasil yang dicapai pada semester 1 dan 2, peserta didik di tetapkan</p>
					<label>{{ $siswa->rapor->max('kenaikan') }}</label>
			</div>


	<div class="ui equal width form">
		<div class="fields">
			<div class="ui field center aligned basic segment">
				Mengetahui:<br>
				Orang tua/Wali<br><br><br><br><br>
				.........................
			</div>
			<div class="ui field center aligned basic segment">
				Bandung, {{ Carbon\Carbon::now()->format('d M Y') }}<br>
				Wali Kelas<br><br><br><br><br>
				{{ $rapor->kelas->guru->nama }}
			</div>
		</div>
	</div>

	<br>

	<div class="ui field center aligned basic segment">
		Mengetahui<br>
		Kepala SMK Puragabaya<br><br><br><br><br>
		Drs. Oman Abdurahman, M.Pd,<br>
		Nip.
	</div>

	<script type="text/javascript">
		setTimeout(function(){ 
			window.history.back();

		}, 200);
	</script>  	

</body>
</html>