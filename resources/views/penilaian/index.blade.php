@extends('layout', [])

@section('menu')
	<a href="{{ url('/penilaian') }}" class="item">Data Penilaian Siswa</a>
	<a href="{{ url('/persentase/penilaian') }}" class="item">Persentase Nilai</a>
@stop

@section('content')
	
	<table class="ui selectable violet table">
		<thead>
			<tr>
				<th>Tahun Ajaran</th>
				<th>Wali Kelas</th>
				<th>Kelas</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			@foreach ($kelas as $row)
			<tr>
				<td>{{ $row->tahunajaran->tahunajaran }}</td>
				<td>{{ $row->guru->nama }}</td>
				<td>{{ $row->nama_kelas }}</td>
				<td><a href="{{ url('/penilaian/kelas/'.$row->id) }}"><button class="ui green button"><i class="sign in icon"></i>Masuk Kelas</button></a></td>
			</tr>
			@endforeach
		</tbody>
	</table>

@stop
