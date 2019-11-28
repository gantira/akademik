@extends('layout', [])

@section('menu')
	<a href="{{ url('/laporan/rapor') }}" class="item">Laporan Rapor Siswa</a>
	<a href="{{ url('/laporan/raporkelas/'.$kelas->id) }}" class="item">Kelas {{ $kelas->nama_kelas }}</a>
	<a href="#" class="item">{{ $siswa->nis }}</a>
	<a href="#" class="item">{{ $siswa->nama_lengkap }}</a>
@stop

@section('content')

	<div class="ui black segment">
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
				: {{ $kelas->nama_kelas }}<br>
				: II<br>
				: {{ $kelas->tahunajaran->tahunajaran }}<br>
		    </div>
		  </div>
		</div>

		<div class="ui divider"></div>

		<div class="ui form">
			<div class="ui red field">
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
				<div class="ui form">
					<div class="grouped fields">
						<div class="field">
							<div class="ui radio checkbox">
								{!! Form::radio('kenaikan', 'Naik ke kelas XI (Sebelas)', $siswa->rapor->max('kenaikan') == 'Naik ke kelas XI (Sebelas)' ? true : false, ['id'=>'radio1', 'onchange'=>'rapor()']) !!}
								<label>Naik ke kelas XI (Sebelas)</label>
							</div>
						</div>
						<div class="field">
							<div class="ui radio checkbox">
								{!! Form::radio('kenaikan', 'Tidak Naik Kelas', $siswa->rapor->max('kenaikan') == 'Tidak Naik Kelas' ? true : false, ['id'=>'radio2', 'onchange'=>'rapor()']) !!}
								<label>Tinggal di kelas</label>
							</div>
						</div>
					</div>
				</div>
			</div>

			<br>
			<br>
			<br>
			<br>

			<div class="field">
				<a href="{{ url('/laporan/cetakrapor/'.$siswa->id) }}">
					<button class="ui button"><i class="print icon"></i>Print</button>				
				</a>
			</div>

			

		</div>

	</div>
	<br>
@stop

@push('scripts')
	<script type="text/javascript">

		function rapor(){
			var kenaikan;

			if (document.getElementById('radio1').checked) {
			  	kenaikan = document.getElementById('radio1').value;
			}
			if (document.getElementById('radio2').checked) {
				kenaikan = document.getElementById('radio2').value;
			}

			var dataString = { 
                siswa_id : {{ $siswa->id}},
                kelas_id : {{ $kelas->id}},
                tahunajaran_id : {{ $kelas->tahunajaran->id }},
                sikap : $('#sikap').val(),
                extra1 : $('#extra1').val(),
                extra2 : $('#extra2').val(),
                extra3 : $('#extra3').val(),
                extra_keterangan1 : $('#extra_keterangan1').val(),
                extra_keterangan2 : $('#extra_keterangan2').val(),
                extra_keterangan3 : $('#extra_keterangan3').val(),
                prestasi1 : $('#prestasi1').val(),
                prestasi2 : $('#prestasi2').val(),
                prestasi3 : $('#prestasi3').val(),
                prestasi_keterangan1 : $('#prestasi_keterangan1').val(),
                prestasi_keterangan2 : $('#prestasi_keterangan2').val(),
                prestasi_keterangan3 : $('#prestasi_keterangan3').val(),
                catatan_walikelas : $('#catatan_walikelas').val(),
                tanggapan_orangtua : $('#tanggapan_orangtua').val(),
                kenaikan : kenaikan,
                _token : '{{ csrf_token() }}'
            };

            $.ajax({
                    url: "{{ url('/laporan/rapor/store') }}",
                    type: "post",
                    data: dataString,
                    dataType: "json",
                    cache: false,
                    success: function(data){

                        console.log(data);
                    }
            });
		}
	</script>
@endpush
