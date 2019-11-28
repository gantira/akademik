@extends('layout', [])

@section('menu')
	<a href="{{ url('/tahunajaran') }}" class="item">Data Tahunajaran</a>
	<a href="{{ url('/tahunajaran/create') }}" class="item">Tambah Tahunajaran</a>
@stop

@section('content')
	
	<table class="ui teal selectable table">
		<thead>
			<tr>
				<th></th>
				<th>Tahunajaran</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
		@foreach ($tahunajaran as $no => $row)
			<tr>
				<td>{{ $no+1 }}</td>
				<td>{{ $row->tahunajaran }}</td>
				<td><a href="{{ url('/tahunajaran/'.$row->id) }}" title="Detail"><i class="search icon"></i></a>
					<a href="{{ url('/tahunajaran/destroy/'.$row->id) }}" title="Delete"><i class="delete icon"></i></a>
				</td>
			</tr>
		@endforeach
		</tbody>
	</table>
@stop
