<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
    	'name'
    ];

    // relationships
    public function users()
    {
    	return $this->belongsToMany(App::User);
    }
}
