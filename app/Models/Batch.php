<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    public function users(){
    	
    	return $this->hasMany('App\Models\User');
    	//updated Batch Model.
    }
}
