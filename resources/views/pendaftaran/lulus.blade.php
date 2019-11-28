<!DOCTYPE html>
<html>
<head>
	<title>Daftar Siswa Lulus</title>
	{{ Html::style('semantic/semantic.min.css') }}
</head>
<body onload="window.print()">
	<center>
		<h3>DAFTAR HASIL KELULUSAN <br> SELEKSI SISWA BARU <br> SMA PURAGABAYA BANDUNG <br>TAHUN 2017/2018</h3>
	</center>
	<table class="ui celled table" id="dataTables">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Peserta</th>
				<th>Asal Sekolah</th>
				<th>KET</th>
			</tr>
		</thead>
		<tbody>
		@foreach ($lulus as $no => $row)
			<tr>
				<td>{{ $no+1 }}</td>
				<td>{{ $row->nama_lengkap }}</td>
				<td>{{ $row->smp_nama }}</td>
				<td>LULUS</td>
			</tr>
		@endforeach
		</tbody>
	</table>

	<script type="text/javascript">
		setTimeout(function(){ 
			window.history.back();

		}, 200);
	</script>  	
</body>
</html>