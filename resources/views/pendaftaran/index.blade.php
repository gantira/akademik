@extends('layout', [])

@section('menu')
	<a href="{{ url('/pendaftaran') }}" class="item">Data Pendaftaran Siswa Baru</a>
	<a href="{{ url('/pendaftaran/create') }}" class="item">Tambah Siswa</a>
	<a href="{{ url('/pendaftaran/setting') }}" class="item">Setting Penerimaan Siswa</a>
	<a href="{{ url('/pendaftaran/lulus') }}" class="item">Daftar Siswa Lulus</a>
@stop

@section('content')
	
	<div class="ui warning message">
	  <i class="close icon"></i>
	  <div class="header">
	    <h2>Tahun Ajaran {{ Carbon\Carbon::now()->format('Y') }}/{{ Carbon\Carbon::now()->addYear(1)->format('Y') }}</h2>
	  </div>
	  <ol class="list">
	  	<li>Jumlah Penerimaan {{ App\SettingPenerimaan::sum('jumlah_penerimaan') }} siswa</li>
	  	<li>Tersisa {{ App\SettingPenerimaan::sum('jumlah_penerimaan')-App\Siswa::count() }} siswa</li>
	  </ol>
	</div>
	
	<table class="ui yellow selectable table">
		<thead>
			<tr>
				<th></th>
				<th>Nama Siswa</th>
				<th>Tanggal Lahir</th>
				<th>Alamat</th>
				<th>Jenis Kelamin</th>
				<th>Nilai Ijazah</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
		@foreach ($pendaftaran as $no => $row)
			<tr>
				<td>{{ $no+1 }}</td>
				<td>{{ $row->nama_lengkap }}</td>
				<td>{{ $row->tanggal_lahir }}</td>
				<td>{{ $row->alamat }}</td>
				<td>{{ $row->jk }}</td>
				<td>{{ $row->nilai_ijazah }}</td>
				<td><a href="{{ url('/pendaftaran/'.$row->id) }}" title="Detail"><i class="search icon"></i></a>
					<a href="{{ url('/pendaftaran/destroy/'.$row->id) }}" title="Delete"><i class="remove user icon"></i></a>
				</td>
			</tr>
		@endforeach
		</tbody>
		<tfoot>
			<tr>
				<th colspan="7"><a href="{{ url('/pendaftaran/seleksi') }}"><button>PROSES SELEKSI</button></a></th>
			</tr>
		</tfoot>
	</table>
@stop
