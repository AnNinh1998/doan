<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dichvu extends Model
{
    protected $table="service";

    public function khoa(){
        return $this->belongsTo('App\Models\Khoa','id_faculty','id');
    }

    public function lienhe(){
        return $this->hasMany('App\Models\Lienhe','id_service','id');
    }

    public function khachhang(){
        return $this->hasMany('App\Models\Khachhang','service_id','id');
    }
}
