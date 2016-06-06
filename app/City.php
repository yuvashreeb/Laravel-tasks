<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'City';
    protected $primarykey = 'Id';
    protected $fillable = ['Id', 'StateId', 'Name', 'Code','CreatedAt', 'IsActive'];
    //public $timestamps = false;
    
     public function State() {
        return $this->belongsTo('App\State', 'StateId');
    }
//      public function States() {
//        return $this->morphTo();
//    }
}
