@extends('layouts.app')
@section('content')
<div class="panel panel-primary">
    <div class="panel-heading">
    	Patients Profile - Create
    </div>

    <div class="panel-body">
    	<form action="/patient" method="POST">
    		{{csrf_field()}}
    		@include('patient.profile.form')
    		@include('layouts.form_create')
    	</form>
    </div>
</div>
@endsection

@section('footer')
	<script>
	    $('.select2').select2({
	        placeholder: 'Select..',
	        allowClear: true
	    });
	</script>
@endsection
