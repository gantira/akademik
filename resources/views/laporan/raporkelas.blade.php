@extends('layout', [])

@section('menu')
	<a href="{{ url('/laporan/rapor') }}" class="item">Laporan Rapor Siswa</a>
	<a href="{{ url('/laporan/raporkelas/'.$kelas->id) }}" class="item">Kelas {{ $kelas->nama_kelas }}</a>
@stop

@section('content')

	<table class="ui selectable table">
		<thead>
			<tr>
				<th></th>
				<th>Nama</th>
				<th>NIS</th>
				<th>Jenis Kelamin</th>
				<th>Tanggal Lahir</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			@foreach ($siswa as $no => $row)
			<tr>
				<td>{{ $no+1 }}</td>
				<td><i class="student icon"></i>{{ $row->siswa->nama_lengkap }}</td>
				<td>{{ $row->siswa->nis }}</td>
				<td>{{ $row->siswa->jk }}</td>
				<td>{{ $row->siswa->tanggal_lahir }}</td>
				<td><a href="{{ url('/laporan/raporsiswa/'.$row->siswa_id.'/'.$row->kelas_id) }}"><button class="ui button"><i class="edit icon"></i>Nilai Rapor</button></a></td>
			</tr>
			@endforeach
			</div>
		</tbody>
	</table>

@stop
