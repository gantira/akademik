@extends('layout', [])

@section('menu')
	<a href="{{ url('/sejarah') }}" class="item">Sejarah Sekolah</a>
@stop

@section('content')
	
	{!! Form::open(['url'=>'/sejarah/store', 'method'=>'post']) !!}
	<div class="ui form">
		<div class="field">
			{!! Form::text('judul', $sejarah->max('judul'), ['class'=>'ui input', 'placeholder'=>'Sejarah Header']) !!}
		</div>
		<div class="field">
			{!! Form::textarea('content', $sejarah->max('content'), ['class'=>'ui input', 'class'=>'ckeditor']) !!}
		</div>

		<div class="field">
			{!! Form::submit('SuBmit', []) !!}
		</div>
	</div>


	{!! Form::close() !!}
@stop

@push('scripts')
	<!-- Ckeditor -->
    {{ Html::script('ckeditor/ckeditor.js') }}
@endpush