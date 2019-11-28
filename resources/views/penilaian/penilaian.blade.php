@extends('layout', [])

@section('menu')
	<a href="{{ url('/penilaian') }}" class="item">Data Penilaian Siswa</a>
	<a href="{{ url('#') }}" class="item">{{ $tahunajaran->tahunajaran }}</a>
	<a href="{{ url('/penilaian/kelas/'.$kelas->id) }}" class="item">Kelas {{ $kelas->nama_kelas }}</a>
	<a href="{{ url('#') }}" class="item">{{ $matapelajaran->nama_matapelajaran }}</a>
@stop

@section('content')

	<table class="ui selectable red table">
		<thead>
			<tr>
				<th class="two wide">NIS</th>
				<th class="two wide">Nama Lengkap</th>
				<th class="two wide">Tugas</th>
				<th class="two wide">Quiz</th>
				<th class="two wide">UTS</th>
				<th class="two wide">UAS</th>
				<th class="one wide">NA</th>
				<th class="two wide">Catatan</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($siswa as $no => $row)
			<tr>
				<td>{{ $row->nis }}</td>
				<td>{{ $row->nama_lengkap }}</td>
				<td>
					<div class="ui form">
						<div class="field"><input type="text" id="tugas{{ $row->id }}" value="{{ $row->penilaian->where('matapelajaran_id', $matapelajaran->id)->max('tugas') }}" onblur="nilai({{ $row->id }})"></div>
					</div>
				</td>
				<td>
					<div class="ui form">
						<div class="field"><input type="text" id="quiz{{ $row->id }}" value="{{ $row->penilaian->where('matapelajaran_id', $matapelajaran->id)->max('quiz') }}" onblur="nilai({{ $row->id }})"></div></td>
					</div>
				<td>
					<div class="ui form">
						<div class="field"><input type="text" id="uts{{ $row->id }}" value="{{ $row->penilaian->where('matapelajaran_id', $matapelajaran->id)->max('uts') }}" onblur="nilai({{ $row->id }})"></div></td>
					</div>
				<td>
					<div class="ui form">
						<div class="field"><input type="text" id="uas{{ $row->id }}" value="{{ $row->penilaian->where('matapelajaran_id', $matapelajaran->id)->max('uas') }}" onblur="nilai({{ $row->id }})"></div></td>
					</div>
				
				<td>
					<div class="ui form">
						<div class="field">
							{{ ($row->penilaian->where('matapelajaran_id', $matapelajaran->id)->max('tugas')*$persentase->tugas/100)+
							($row->penilaian->where('matapelajaran_id', $matapelajaran->id)->max('quiz')*$persentase->quiz/100)+
							($row->penilaian->where('matapelajaran_id', $matapelajaran->id)->max('uts')*$persentase->uts/100)+
							($row->penilaian->where('matapelajaran_id', $matapelajaran->id)->max('uas')*$persentase->uas/100) }}
						</div>
					</div>
				</td>
				<td>
					<div class="ui form">
						<textarea rows="1" id="catatan{{ $row->id }}" onblur="nilai({{ $row->id }})">{{ $row->penilaian->where('matapelajaran_id', $matapelajaran->id)->max('catatan') }}</textarea>
					</div>
				</td>
			</tr>
			@endforeach
			</div>
		</tbody>
	</table>

	<div class="ui modal">
	  <i class="close icon"></i>
	  <div class="header">
	    Catatan Siswa
	  </div>
	  <div class="image content">
	    <div class="ui medium image">
	      <img src="{{ asset('rachel.png') }}">
	    </div>
	    <div class="description">
	      <div class="ui header">We've auto-chosen a profile image for you.</div>
	      <p>We've grabbed the following image from the <a href="https://www.gravatar.com" target="_blank">gravatar</a> image associated with your registered e-mail address.</p>
	      <p>Is it okay to use this photo?</p>
	    </div>
	  </div>
	  <div class="actions">
	    <div class="ui black deny button">
	      Nope
	    </div>
	    <div class="ui positive right labeled icon button">
	      Yep, that's me
	      <i class="checkmark icon"></i>
	    </div>
	  </div>
	</div>

@stop

@push('scripts')
	<script type="text/javascript">
		function nilai(siswaid){

			var dataString = { 
                siswa_id : siswaid,
                kelas_id : {{ $kelas->id}},
                matapelajaran_id : {{ $matapelajaran->id}},
                tahunajaran_id : {{ $tahunajaran->id}},
                quiz : $("#quiz"+siswaid).val(),
                tugas : $("#tugas"+siswaid).val(),
                uts : $("#uts"+siswaid).val(),
                uas : $("#uas"+siswaid).val(),
                catatan : $("#catatan"+siswaid).val(),
                _token : '{{ csrf_token() }}'
            };

            $.ajax({
                    url: "{{ URL('/penilaian/berinilai') }}",
                    type: "post",
                    data: dataString,
                    dataType: "json",
                    cache: false,
                    success: function(data){

                        console.log(data);
                    }
                });
		}

		function modal() {
			$('.ui.modal').modal('show');
		}
	</script>
@endpush