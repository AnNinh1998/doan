<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bacsy extends Model
{
    protected $table="doctors";

    public function khoa(){
        return $this->belongsTo('App\Models\Khoa','id_faculty','id');
    }

    public function lienhe(){
        return $this->hasMany('App\Models\Lienhe','id_doctor','id');
    }
}
