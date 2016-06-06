<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model {

    protected $table = 'Country';
    protected $primarykey = 'Id';
    protected $fillable = ['Id', 'ContinentId', 'Name', 'Code', 'Alias', 'DialCode', 'CreatedAt', 'IsActive'];

    //public $timestamps = false;

    public function Continent() {
        return $this->belongsTo('App\Continent', 'ContinentId');
    }

    public function State() {
        return $this->hasMany('App\State', 'CountryId', 'Id');
    }

    public function OneContinent() {
        return $this->hasOne('App\Continent', 'Id', 'ContinentId');
    }

    public function City() {
        return $this->hasManyThrough('App\City', 'App\State', 'CountryId', 'StateId', 'Id');
    }

//    public function stateMorph() {
//        return $this->morphToMany('App\City', 'States');
//    }

}
