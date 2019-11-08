<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    public $table ='groups';
    public function staffs(){
        return $this->hasMany('App\Staff');
    }
}
