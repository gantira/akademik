@extends('layout', [])

@section('menu')
	<a href="{{ url('/absensi') }}" class="item">Data Absensi Siswa</a>
	<a href="{{ url('#') }}" class="item">{{ $tahunajaran->tahunajaran }}</a>
	<a href="{{ url('#') }}" class="item">Kelas {{ $kelas->nama_kelas }}</a>
	<a href="#" class="item">{{ Carbon\Carbon::now()->format('Y-m-d') }}</a>
@stop

@section('content')

	<table class="ui selectable violet table">
		<thead>
			<tr>
				<th></th>
				<th>NIS</th>
				<th>Nama Lengkap</th>
				<th>Keterangan</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($siswa as $no => $row)
			<tr>
				<td>{{ $no+1 }}</td>
				<td>{{ $row->nis }}</td>
				<td>{{ $row->nama_lengkap }}</td>
				@forelse ($row->absensi->where('tanggal', Carbon\Carbon::now()->format('Y-m-d')) as $absen)
					<td>
						{!! Form::select('keterangan', ['Hadir'=>'Hadir', 'Sakit'=>'Sakit','Tanpa Keterangan'=>'Tanpa Keterangan'], $absen->keterangan, ['class'=>'ui dropdown', 'id'=>'keterangan'.$row->id, 'onchange'=>'absen('.$row->id.')', 'placeholder'=>'Pilih Keterangan' ]) !!}
					</td>
				@empty
					<td>
						{!! Form::select('keterangan', ['Hadir'=>'Hadir', 'Sakit'=>'Sakit','Tanpa Keterangan'=>'Tanpa Keterangan'], null, ['class'=>'ui dropdown', 'id'=>'keterangan'.$row->id, 'onchange'=>'absen('.$row->id.')', 'placeholder'=>'Pilih Keterangan' ]) !!}
					</td>
				@endforelse
			</tr>
			@endforeach
			</div>
		</tbody>
	</table>

@stop

@push('scripts')
	<script type="text/javascript">
		function absen(siswaid){
			var dataString = { 
                siswa_id : siswaid,
                kelas_id : {{ $kelas->id}},
                tahunajaran_id : {{ $tahunajaran->id}},
                tanggal : '{{ Carbon\Carbon::now()->format('Y-m-d') }}',
                keterangan : $('#keterangan'+siswaid).val(),
                _token : '{{ csrf_token() }}'
            };

            $.ajax({
                    url: "{{ URL('/absensi/store') }}",
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