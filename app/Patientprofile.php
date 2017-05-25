<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patientprofile extends Model
{
    protected $fillable = [
    	'ref_no', 'acc_no', 'name', 'nric', 'contact',
        'alt_contact', 'address', 'is_active', 'email',
        'remarks',


        'profile_id', 'company_id', 'occupation_id', 'gender_id', 'race_id',
        'language_id', 'marital_id', 'religion_id', 'resident_id', 'nationality_id',
        'created_by', 'updated_by'
    ];

    // relationships
    public function profile()
    {
        return $this->belongsTo(App::Profile);
    }

    public function company()
    {
        return $this->belongsTo(App::Company);
    }

    public function occupation()
    {
        return $this->belongsTo(App::Occupation);
    }

    public function gender()
    {
        return $this->belongsTo(App::Gender);
    }

    public function race()
    {
        return $this->belongsTo(App::Race);
    }

    public function language()
    {
        return $this->belongsTo(App::Language);
    }

    public function marital()
    {
        return $this->belongsTo(App::Marital);
    }

    public function religion()
    {
        return $this->belongsTo(App::Religion);
    }

    public function resident()
    {
        return $this->belongsTo(App::Resident);
    }

    public function nationality()
    {
        return $this->belongsTo(App::Nationality);
    }

    // update by created by relationships
    public function creater()
    {
        return $this->belongsTo(App::User, 'created_by');
    }

    public function updater()
    {
        return $this->belongsTo(App::User, 'updated_by');
    }

    // getter setter
    public function setProfileIdAttribute($value)
    {
        $this->attributes['profile_id'] = $value ? $value : null;
    }
}
