@extends('layout', [])

@section('menu')
	<a href="{{ url('/laporan/rapor') }}" class="item">Laporan Rapor Siswa</a>
@stop

@section('content')
	
	<table class="ui selectable table">
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
				<td><a href="{{ url('/laporan/raporkelas/'.$row->id) }}"><button class="ui green button"><i class="sign in icon"></i>Masuk Kelas</button></a></td>
			</tr>
			@endforeach
		</tbody>
	</table>

@stop
