<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model {

    protected $table = 'State';
    protected $primarykey = 'Id';
    protected $fillable = ['Id', 'CountryId', 'Name', 'Code', 'CreatedAt', 'IsActive'];

    //public $timestamps = false;
    public function Country() {
        return $this->belongsTo('App\Country', 'CountryId');
    }

    public function City() {
        return $this->hasMany('App\City', 'StateId', 'Id');
    }

//    public function stateMorph() {
//        return $this->morphToMany('App\City','States');
//    }

}
