<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	{{ Html::style('semantic/semantic.min.css') }}
	<title>Cetak Jadwal Pelajaran Kelas {{ $kelas }}</title>
</head>
<body onload="window.print()">
		
	<div class="ui grid">
	  	<div class="left floated two wide column">
	    	<img src="{{ asset('logo.png') }}" alt="" width="80px" height="80px">
	 	</div>
	  	<div class="twelve wide column">
		  	<center>
	  			<h3>SMA PURAGABAYA BANDUNG <br> 2017 <br><br> Laporan Jadwal Pelajaran Kelas {{ $kelas }}</h3>
	  		</center>
	  	</div>
	  	<div class="right floated two wide column right aligned">
		    <img src="{{ asset('logo.png') }}" alt="" width="80px" height="80px">
	  	</div>
	</div>
	
	<hr>
	@if ($jadwal->where('hari_id', 1)->sum('hari_id'))
	<h4>Hari Senin</h4>
		<table class="ui orange selectable table">
			<thead>
				<tr>
					<th>Hari</th>
					<th>Jam</th>
					<th>Mata Pelajaran</th>
					<th>Guru</th>
				</tr>
			</thead>
			<tbody>
			@foreach ($jadwal->where('hari_id', 1) as $no => $row)
				@if ($loop->first)
					@if ($row->hari_id == 1)
					<tr>
						<td>{{ $row->hari->hari }}</td>
						<td>07.00-07.40</td>
						<td>Jadwal Upacara</td>
						<td></td>
					</tr>
					@endif
				@elseif($loop->index == 3)
				<tr>
					<td>{{ $row->hari->hari }}</td>
					<td>09.15-09.40</td>
					<td>Jam Istirahat</td>
					<td></td>
				</tr>
				@elseif($loop->index == 8)
				<tr>
					<td>{{ $row->hari->hari }}</td>
					<td>12.10-12.30</td>
					<td>Jam Salat Dzuhur</td>
					<td></td>
				</tr>
				@endif
				<tr>
					<td>{{ $row->hari->hari }}</td>
					<td>{{ $row->jam->jam }}</td>
					<td>{{ $row->matapelajaran->nama_matapelajaran }}</td>
					<td>{{ $row->guru->nama }}</td>
				</tr>
			@endforeach
			</tbody>
		</table>
	@endif

	@if ($jadwal->where('hari_id', 2)->sum('hari_id'))
	<h4>Hari Selasa</h4>
		<table class="ui orange selectable table">
			<thead>
				<tr>
					<th>Hari</th>
					<th>Jam</th>
					<th>Mata Pelajaran</th>
					<th>Guru</th>
				</tr>
			</thead>
			<tbody>
			@foreach ($jadwal->where('hari_id', 2) as $no => $row)
				@if ($loop->first)
					@if ($row->hari_id == 1)
					<tr>
						<td>{{ $row->hari->hari }}</td>
						<td>07.00-07.40</td>
						<td>Jadwal Upacara</td>
						<td></td>
					</tr>
					@endif
				@elseif($loop->index == 3)
				<tr>
					<td>{{ $row->hari->hari }}</td>
					<td>09.15-09.40</td>
					<td>Jam Istirahat</td>
					<td></td>
				</tr>
				@elseif($loop->index == 8)
				<tr>
					<td>{{ $row->hari->hari }}</td>
					<td>12.10-12.30</td>
					<td>Jam Salat Dzuhur</td>
					<td></td>
				</tr>
				@endif
				<tr>
					<td>{{ $row->hari->hari }}</td>
					<td>{{ $row->jam->jam }}</td>
					<td>{{ $row->matapelajaran->nama_matapelajaran }}</td>
					<td>{{ $row->guru->nama }}</td>
				</tr>
			@endforeach
			</tbody>
		</table>
	@endif

	@if ($jadwal->where('hari_id', 3)->sum('hari_id'))
	<h4>Hari Rabu</h4>
		<table class="ui orange selectable table">
			<thead>
				<tr>
					<th>Hari</th>
					<th>Jam</th>
					<th>Mata Pelajaran</th>
					<th>Guru</th>
				</tr>
			</thead>
			<tbody>
			@foreach ($jadwal->where('hari_id', 3) as $no => $row)
				@if ($loop->first)
					@if ($row->hari_id == 1)
					<tr>
						<td>{{ $row->hari->hari }}</td>
						<td>07.00-07.40</td>
						<td>Jadwal Upacara</td>
						<td></td>
					</tr>
					@endif
				@elseif($loop->index == 3)
				<tr>
					<td>{{ $row->hari->hari }}</td>
					<td>09.15-09.40</td>
					<td>Jam Istirahat</td>
					<td></td>
				</tr>
				@elseif($loop->index == 8)
				<tr>
					<td>{{ $row->hari->hari }}</td>
					<td>12.10-12.30</td>
					<td>Jam Salat Dzuhur</td>
					<td></td>
				</tr>
				@endif
				<tr>
					<td>{{ $row->hari->hari }}</td>
					<td>{{ $row->jam->jam }}</td>
					<td>{{ $row->matapelajaran->nama_matapelajaran }}</td>
					<td>{{ $row->guru->nama }}</td>
				</tr>
			@endforeach
			</tbody>
		</table>
	@endif

	@if ($jadwal->where('hari_id', 4)->sum('hari_id'))
	<h4>Hari Kamis</h4>
		<table class="ui orange selectable table">
			<thead>
				<tr>
					<th>Hari</th>
					<th>Jam</th>
					<th>Mata Pelajaran</th>
					<th>Guru</th>
				</tr>
			</thead>
			<tbody>
			@foreach ($jadwal->where('hari_id', 4) as $no => $row)
				@if ($loop->first)
					@if ($row->hari_id == 1)
					<tr>
						<td>{{ $row->hari->hari }}</td>
						<td>07.00-07.40</td>
						<td>Jadwal Upacara</td>
						<td></td>
					</tr>
					@endif
				@elseif($loop->index == 3)
				<tr>
					<td>{{ $row->hari->hari }}</td>
					<td>09.15-09.40</td>
					<td>Jam Istirahat</td>
					<td></td>
				</tr>
				@elseif($loop->index == 8)
				<tr>
					<td>{{ $row->hari->hari }}</td>
					<td>12.10-12.30</td>
					<td>Jam Salat Dzuhur</td>
					<td></td>
				</tr>
				@endif
				<tr>
					<td>{{ $row->hari->hari }}</td>
					<td>{{ $row->jam->jam }}</td>
					<td>{{ $row->matapelajaran->nama_matapelajaran }}</td>
					<td>{{ $row->guru->nama }}</td>
				</tr>
			@endforeach
			</tbody>
		</table>
	@endif

	@if ($jadwal->where('hari_id', 5)->sum('hari_id'))
	<h4>Hari Jumat</h4>
		<table class="ui orange selectable table">
			<thead>
				<tr>
					<th>Hari</th>
					<th>Jam</th>
					<th>Mata Pelajaran</th>
					<th>Guru</th>
				</tr>
			</thead>
			<tbody>
			@foreach ($jadwal->where('hari_id', 5) as $no => $row)
				@if ($loop->first)
					@if ($row->hari_id == 1)
					<tr>
						<td>{{ $row->hari->hari }}</td>
						<td>07.00-07.40</td>
						<td>Jadwal Upacara</td>
						<td></td>
					</tr>
					@endif
				@elseif($loop->index == 3)
				<tr>
					<td>{{ $row->hari->hari }}</td>
					<td>09.15-09.40</td>
					<td>Jam Istirahat</td>
					<td></td>
				</tr>
				@elseif($loop->index == 8)
				<tr>
					<td>{{ $row->hari->hari }}</td>
					<td>12.10-12.30</td>
					<td>Jam Salat Dzuhur</td>
					<td></td>
				</tr>
				@endif
				<tr>
					<td>{{ $row->hari->hari }}</td>
					<td>{{ $row->jam->jam }}</td>
					<td>{{ $row->matapelajaran->nama_matapelajaran }}</td>
					<td>{{ $row->guru->nama }}</td>
				</tr>
			@endforeach
			</tbody>
		</table>
	@endif

	@if ($jadwal->where('hari_id', 6)->sum('hari_id'))
	<h4>Hari Sabtu</h4>
		<table class="ui orange selectable table">
			<thead>
				<tr>
					<th>Hari</th>
					<th>Jam</th>
					<th>Mata Pelajaran</th>
					<th>Guru</th>
				</tr>
			</thead>
			<tbody>
			@foreach ($jadwal->where('hari_id', 6) as $no => $row)
				@if ($loop->first)
					@if ($row->hari_id == 1)
					<tr>
						<td>{{ $row->hari->hari }}</td>
						<td>07.00-07.40</td>
						<td>Jadwal Upacara</td>
						<td></td>
					</tr>
					@endif
				@elseif($loop->index == 3)
				<tr>
					<td>{{ $row->hari->hari }}</td>
					<td>09.15-09.40</td>
					<td>Jam Istirahat</td>
					<td></td>
				</tr>
				@elseif($loop->index == 8)
				<tr>
					<td>{{ $row->hari->hari }}</td>
					<td>12.10-12.30</td>
					<td>Jam Salat Dzuhur</td>
					<td></td>
				</tr>
				@endif
				<tr>
					<td>{{ $row->hari->hari }}</td>
					<td>{{ $row->jam->jam }}</td>
					<td>{{ $row->matapelajaran->nama_matapelajaran }}</td>
					<td>{{ $row->guru->nama }}</td>
				</tr>
			@endforeach
			</tbody>
		</table>
	@endif

	<script type="text/javascript">
		setTimeout(function(){ 
			window.history.back();

		}, 200);
	</script>  	
</body>
</html>