<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Khoa extends Model
{
    protected $table="faculty";

    public function bacsy(){
        return $this->hasMany('App\Models\Bacsy','id_faculty','id');
    }
    public function dichvu(){
        return $this->hasMany('App\Models\Dichvu','id_faculty','id');
    }
}
