@extends('layout', [])

@section('menu')
	<a href="{{ url('/penilaian') }}" class="item">Data Penilaian Siswa</a>
	<a href="{{ url('/persentase/penilaian') }}" class="item">Persentase Nilai</a>
@stop

@section('content')
	
	{!! Form::model($persentase, ['url'=>'/persentase/penilaian/'.$persentase->id, 'method' => 'patch']) !!}
	<div class="ui form segment">
	  <div class="ui input equal width fields">
	    <div class="field">
	      <label>Quiz</label>
	      {!! Form::text('quiz', null, ['placeholder' => 'Persentase nilai quiz']) !!}
	    </div>
	    <div class="field">
	      <label>Tugas</label>
	      {!! Form::text('tugas', null, ['placeholder' => 'Persentase nilai tugas']) !!}
	    </div>
	    <div class="field">
	      <label>UTS</label>
	      {!! Form::text('uts', null, ['placeholder' => 'Persentase nilai uts']) !!}
	    </div>
	    <div class="field">
	      <label>UAS</label>
	      {!! Form::text('uas', null, ['placeholder' => 'Persentase nilai uas']) !!}
	    </div>
	    
	  </div>
	  <div class="field">
	  	{!! Form::submit('SIMPAN', ['class' => 'ui button']) !!}
	  </div>
	</div>
	{!! Form::close() !!}
@stop
