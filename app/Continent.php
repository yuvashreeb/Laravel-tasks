<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Continent extends Model {

    protected $table = 'Continent';
    protected $primarykey = 'Id';
    protected $fillable = ['Id', 'Name', 'Code', 'CreatedAt', 'IsActive'];
    public $timestamps = false;
    
    public function Country() {
        return $this->hasMany('App\Country','ContinentId',"Id"); 
    }
   public function ThroughState(){
       return $this->hasManyThrough('App\State','App\Country','ContinentId','CountryId','Id');
   }
}
