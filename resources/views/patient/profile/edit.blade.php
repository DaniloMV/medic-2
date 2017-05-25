@extends('layouts.app')
@section('content')
<div class="panel panel-primary">
    <div class="panel-heading">
    	Patients Profile - Edit {{$patient->ref_no}} - {{$patient->name}}
    </div>

    <div class="panel-body">
    	<form action="/patient/{{$patient->id}}" method="POST">
            <input type="hidden" name="_method" value="PATCH">
    		{{csrf_field()}}
    		@include('patient.profile.form')
    		@include('layouts.form_edit')
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
