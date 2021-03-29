<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Khachhang extends Model
{
    protected $table="customer";

    public function dichvu(){
        return $this->belongsTo('App\Models\Dichvu','service_id','id');
    }
    public function khoa(){
        return $this->belongsTo('App\Models\Khoa','faculty_id','id');
    }
    public function bacsy(){
        return $this->belongsTo('App\Models\Bacsy','doctor_id','id');
    }
}
