<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    public $table='staffs';
    protected $primaryKey = 'id';
    public function groupz(){
        return $this->belongsTo(Group::class,'group_id','id');
    }
}
