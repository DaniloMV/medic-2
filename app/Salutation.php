<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salutation extends Model
{
	protected $fillable = [
		'name'
	];

	// relationships
    // relationships
    public function creater()
    {
        return $this->belongsTo(App::User, 'created_by');
    }

    public function updater()
    {
        return $this->belongsTo(App::User, 'updated_by');
    }
}
