<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    //protected $fillable = ['department_name','status'];

    public function users(){
    	
    	return $this->hasMany('App\Models\User');
    	//updated Department Model.
    }
}
