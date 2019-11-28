@extends('layout', [])

@section('menu')
	<a href="{{ url('/kelas') }}" class="item">Data Kelas</a>
	<a href="{{ url('/kelas/create') }}" class="item">Tambah Kelas</a>
@stop

@section('content')
	
	<table class="ui orange selectable table">
		<thead>
			<tr>
				<th></th>
				<th>Nama Kelas</th>
				<th>Wali Kelas</th>
				<th>Kapasitas</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
		@foreach ($kelas as $no => $row)
			<tr>
				<td>{{ $no+1 }}</td>
				<td><i class="tag icon"></i>{{ $row->nama_kelas }}</td>
				<td>{{ $row->guru->nama }}</td>
				<td>{{ $row->kapasitas }}</td>
				<td><a href="{{ url('/kelas/'.$row->id) }}" title="Detail"><i class="search icon"></i></a>
					<a href="{{ url('/kelas/destroy/'.$row->id) }}" title="Delete"><i class="remove icon"></i></a>
				</td>
			</tr>
		@endforeach
		</tbody>
		<tfoot>
			<tr>
				<th>Total</th>
				<th></th>
				<th></th>
				<th>{{ $total }}</th>
				<th></th>
			</tr>
		</tfoot>
	</table>
@stop
