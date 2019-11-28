@extends('layout', [])

@section('menu')
	<a href="{{ url('/visimisi') }}" class="item">Visi & Misi Sekolah</a>
@stop

@section('content')
	
	{!! Form::open(['url'=>'/visimisi/store', 'method'=>'post']) !!}
	<div class="ui form">
		<div class="field">
			{!! Form::text('judul', $visimisi->max('judul'), ['class'=>'ui input', 'placeholder'=>'Visi & Misi Header']) !!}
		</div>
		<div class="field">
			{!! Form::textarea('content', $visimisi->max('content'), ['class'=>'ui input', 'class'=>'ckeditor']) !!}
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