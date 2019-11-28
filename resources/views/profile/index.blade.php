@extends('layout', [])

@section('menu')
	<a href="{{ url('/profile') }}" class="item">Profile Sekolah</a>
@stop

@section('content')
	
	{!! Form::open(['url'=>'/profile/store', 'method'=>'post']) !!}
	<div class="ui form">
		<div class="field">
			{!! Form::text('judul', $profile->max('judul'), ['class'=>'ui input', 'placeholder'=>'Profile Header']) !!}
		</div>
		<div class="field">
			{!! Form::textarea('content', $profile->max('content'), ['class'=>'ui input', 'class'=>'ckeditor']) !!}
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