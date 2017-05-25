@inject('companies', 'App\Company')
@inject('occupations', 'App\Occupation')
@inject('genders', 'App\Gender')
@inject('races', 'App\Race')
@inject('languages', 'App\Language')
@inject('maritals', 'App\Marital')
@inject('religions', 'App\Religion')
@inject('residents', 'App\Resident')
@inject('nationalities', 'App\Nationality')

<div v-cloak>
	<div class="row">
	    <div class="col-md-6 col-sm-6 col-xs-12">
	        <div class="form-group{{ $errors->has('ref_no') ? ' has-error' : '' }}">
	            <label for="ref_no" class="control-label">Ref No</label>
	            <label for="required" class="control-label" style="color:red;">*</label>
	            <input type="text" name="ref_no" class="form-control" value="{{ isset($patient) ? $patient->ref_no : old('ref_no') }}">
	            @if($errors->has('ref_no'))
	                <span class="help-block" style="color:red;">{{ $errors->first('ref_no') }}</span>
	            @endif
	        </div>
	    </div>

	    <div class="col-md-6 col-sm-6 col-xs-12">
	        <div class="form-group{{ $errors->has('acc_no') ? ' has-error' : '' }}">
	            <label for="acc_no" class="control-label">Acc No</label>
	            <label for="required" class="control-label" style="color:red;">*</label>
	            <input type="text" name="acc_no" class="form-control" value="{{ isset($patient) ? $patient->acc_no : old('acc_no') }}">
	            @if($errors->has('acc_no'))
	                <span class="help-block" style="color:red;">{{ $errors->first('acc_no') }}</span>
	            @endif
	        </div>
	    </div>
	</div>

	<div class="row">
	    <div class="col-md-6 col-sm-6 col-xs-12">
	        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
	            <label for="name" class="control-label">Name</label>
	            <label for="required" class="control-label" style="color:red;">*</label>
	            <input type="text" name="name" class="form-control" value="{{ isset($patient) ? $patient->name : old('name') }}">
	            @if($errors->has('name'))
	                <span class="help-block" style="color:red;">{{ $errors->first('name') }}</span>
	            @endif
	        </div>
	    </div>

	    <div class="col-md-6 col-sm-6 col-xs-12">
	        <div class="form-group{{ $errors->has('nric') ? ' has-error' : '' }}">
	            <label for="nric" class="control-label">NRIC/ Passport</label>
	            <label for="required" class="control-label" style="color:red;">*</label>
	            <input type="text" name="nric" class="form-control" value="{{ isset($patient) ? $patient->nric : old('nric') }}">
	            @if($errors->has('nric'))
	                <span class="help-block" style="color:red;">{{ $errors->first('nric') }}</span>
	            @endif
	        </div>
	    </div>
	</div>

	<div class="row">
	    <div class="col-md-4 col-sm-4 col-xs-12">
	        <div class="form-group{{ $errors->has('contact') ? ' has-error' : '' }}">
	            <label for="contact" class="control-label">Contact</label>
	            <label for="required" class="control-label" style="color:red;">*</label>
	            <input type="text" name="contact" class="form-control" value="{{ isset($patient) ? $patient->contact : old('contact') }}">
	            @if($errors->has('contact'))
	                <span class="help-block" style="color:red;">{{ $errors->first('contact') }}</span>
	            @endif
	        </div>
	    </div>
	    <div class="col-md-4 col-sm-4 col-xs-12">
	        <div class="form-group{{ $errors->has('alt_contact') ? ' has-error' : '' }}">
	            <label for="alt_contact" class="control-label">Alt Contact</label>
	            <input type="text" name="alt_contact" class="form-control" value="{{ isset($patient) ? $patient->alt_contact : old('alt_contact') }}">
	            @if($errors->has('alt_contact'))
	                <span class="help-block" style="color:red;">{{ $errors->first('alt_contact') }}</span>
	            @endif
	        </div>
	    </div>
	    <div class="col-md-4 col-sm-4 col-xs-12">
	        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
	            <label for="email" class="control-label">Email</label>
	            <input type="text" name="email" class="form-control" value="{{ isset($patient) ? $patient->email : old('email') }}">
	            @if($errors->has('email'))
	                <span class="help-block" style="color:red;">{{ $errors->first('email') }}</span>
	            @endif
	        </div>
	    </div>
	</div>

	<div class="row">
	    <div class="col-md-3 col-sm-3 col-xs-12">
	        <div class="form-group{{ $errors->has('resident_id') ? ' has-error' : '' }}">
	            <label for="resident_id" class="control-label">Resident</label>
	            <label for="required" class="control-label" style="color:red;">*</label>
	            {!! Form::select('resident_id',
	                [''=>null] + $residents::pluck('name', 'id')->all(),
	                isset($patient) ? $patient->resident_id : '',
	                ['class'=>'select2 form-control'])
	            !!}
	            @if($errors->has('resident_id'))
	                <span class="help-block" style="color:red;">{{ $errors->first('resident_id') }}</span>
	            @endif
	        </div>
	    </div>
	    <div class="col-md-3 col-sm-3 col-xs-12">
	        <div class="form-group{{ $errors->has('nationality_id') ? ' has-error' : '' }}">
	            <label for="nationality_id" class="control-label">Nationality</label>
	            <label for="required" class="control-label" style="color:red;">*</label>
	            {!! Form::select('nationality_id',
	                [''=>null] + $nationalities::pluck('name', 'id')->all(),
	                isset($patient) ? $patient->nationality_id : '',
	                ['class'=>'select2 form-control'])
	            !!}
	            @if($errors->has('nationality_id'))
	                <span class="help-block" style="color:red;">{{ $errors->first('nationality_id') }}</span>
	            @endif
	        </div>
	    </div>
	    <div class="col-md-3 col-sm-3 col-xs-12">
	        <div class="form-group{{ $errors->has('gender_id') ? ' has-error' : '' }}">
	            <label for="gender_id" class="control-label">Gender</label>
	            <label for="required" class="control-label" style="color:red;">*</label>
	            {!! Form::select('gender_id',
	                [''=>null] + $genders::pluck('name', 'id')->all(),
	                isset($patient) ? $patient->gender_id : '',
	                ['class'=>'select2 form-control'])
	            !!}
	            @if($errors->has('gender_id'))
	                <span class="help-block" style="color:red;">{{ $errors->first('gender_id') }}</span>
	            @endif
	        </div>
	    </div>
	    <div class="col-md-3 col-sm-3 col-xs-12">
	        <div class="form-group{{ $errors->has('marital_id') ? ' has-error' : '' }}">
	            <label for="marital_id" class="control-label">Marital Status</label>
	            {!! Form::select('marital_id',
	                [''=>null] + $maritals::pluck('name', 'id')->all(),
	                isset($patient) ? $patient->marital_id : '',
	                ['class'=>'select2 form-control'])
	            !!}
	            @if($errors->has('marital_id'))
	                <span class="help-block" style="color:red;">{{ $errors->first('marital_id') }}</span>
	            @endif
	        </div>
	    </div>
	</div>

	<div class="row">
	    <div class="col-md-3 col-sm-3 col-xs-12">
	        <div class="form-group{{ $errors->has('race_id') ? ' has-error' : '' }}">
	            <label for="race_id" class="control-label">Race</label>
	            {!! Form::select('race_id',
	                [''=>null] + $races::pluck('name', 'id')->all(),
	                isset($patient) ? $patient->race_id : '',
	                ['class'=>'select2 form-control'])
	            !!}
	            @if($errors->has('race_id'))
	                <span class="help-block" style="color:red;">{{ $errors->first('race_id') }}</span>
	            @endif
	        </div>
	    </div>
	    <div class="col-md-3 col-sm-3 col-xs-12">
	        <div class="form-group{{ $errors->has('religion_id') ? ' has-error' : '' }}">
	            <label for="religion_id" class="control-label">Religion</label>
	            {!! Form::select('religion_id',
	                [''=>null] + $religions::pluck('name', 'id')->all(),
	                isset($patient) ? $patient->religion_id : '',
	                ['class'=>'select2 form-control'])
	            !!}
	            @if($errors->has('religion_id'))
	                <span class="help-block" style="color:red;">{{ $errors->first('religion_id') }}</span>
	            @endif
	        </div>
	    </div>
	    <div class="col-md-3 col-sm-3 col-xs-12">
	        <div class="form-group{{ $errors->has('language_id') ? ' has-error' : '' }}">
	            <label for="language_id" class="control-label">Language</label>
	            {!! Form::select('language_id',
	                [''=>null] + $languages::pluck('name', 'id')->all(),
	                isset($patient) ? $patient->language_id : '',
	                ['class'=>'select2 form-control'])
	            !!}
	            @if($errors->has('language_id'))
	                <span class="help-block" style="color:red;">{{ $errors->first('language_id') }}</span>
	            @endif
	        </div>
	    </div>
	    <div class="col-md-3 col-sm-3 col-xs-12">
	        <div class="form-group{{ $errors->has('occupation_id') ? ' has-error' : '' }}">
	            <label for="occupation_id" class="control-label">Occupation</label>
	            {!! Form::select('occupation_id',
	                [''=>null] + $occupations::pluck('name', 'id')->all(),
	                isset($patient) ? $patient->occupation_id : '',
	                ['class'=>'select2 form-control'])
	            !!}
	            @if($errors->has('occupation_id'))
	                <span class="help-block" style="color:red;">{{ $errors->first('occupation_id') }}</span>
	            @endif
	        </div>
	    </div>
	</div>
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
	        <div class="form-group{{ $errors->has('remark') ? ' has-error' : '' }}">
	            <label for="remark" class="control-label">Remark</label>
	            <textarea name="remark" class="form-control" rows="3">
	            	{{ isset($patient) ? $patient->remark : old('remark') }}
	            </textarea>
	            @if($errors->has('remark'))
	                <span class="help-block" style="color:red;">{{ $errors->first('remark') }}</span>
	            @endif
	        </div>
        </div>
	</div>
</div>
