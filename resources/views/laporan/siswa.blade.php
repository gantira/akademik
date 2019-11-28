@extends('layout', [])

@section('menu')
	<a href="{{ url('/laporan/siswa') }}" class="item">Laporan Siswa Baru</a>
@stop

@section('content')
	<div class="ui segments">

		<div class="ui right aligned basic segment">
		{!! Form::open(['url'=>'/laporan/cetaksiswa']) !!}
			{{ Form::select('kelas_id', App\Kelas::pluck('nama_kelas', 'id'), null, ['placeholder'=>'Pilih Kelas', 'class'=>'ui dropdown']) }}
			<button class="ui teal button">Cetak</button>
		{!! Form::close() !!}
		</div>

			<table class="ui selectable table"">
				<thead>
					<tr>
						<th></th>
						<th>NIS</th>
						<th>Nama Lengkap Siswa</th>
						<th>Tempat Lahir</th>
						<th>Jenis Kelamin</th>
						<th>Tanggal Lahir</th>
						<th>Agama</th>
						<th>Kelas</th>
						<th>Tahun Ajaran</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
				@foreach ($siswa as $no => $row)
					<tr>
						<td>{{ $no+1 }}</td>
						<td>{{ $row->nis }}</td>
						<td><i class="student icon"></i>{{ $row->nama_lengkap }}</td>
						<td>{{ $row->tempat_lahir }}</td>
						<td>{{ $row->jk }}</td>
						<td>{{ $row->tanggal_lahir }}</td>
						<td>{{ $row->agama }}</td>
						<td>{{ $row->kelas->nama_kelas }}</td>
						<td>{{ $row->kelas->tahunajaran->tahunajaran }}</td>
						<td><a href="{{ url('/siswa/detail/'.$row->id) }}"><button class="ui small button"><i class="user icon"></i>Detail</button></a></td>
					</tr>
				@endforeach
				</tbody>
				<tfoot>
				<tr>
					<th colspan="10"></th>
				</tr>
			</tfoot>
			</table>
	</div>

@stop
