	@if (Session::has('message'))
		<div class="ui positive icon message">
		  <i class="checkmark icon"></i>
		  <div class="content">
		  	<div class="header">
		    	{{ Session::get('message') }}
		  	</div>
		    <ul class="list">
		    	{!! Session::get('data') !!}
		    </ul>
		  </div>
		</div>
	@endif

	@if (Session::has('warning_message'))
		<div class="ui warning icon message">
		  <i class="warning icon"></i>
		  <div class="content">
		  	<div class="header">
		    	{{ Session::get('warning_message') }}
		    </div>
			<ul class="list">
			   	{!! Session::get('data') !!}
			</ul>
		  </div>
		</div>
	@endif