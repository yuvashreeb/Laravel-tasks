<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Continent extends Model {

    protected $table = 'Continent';
    protected $primarykey = 'Id';
    protected $fillable = ['Id', 'Name', 'Code', 'CreatedAt', 'IsActive'];
    public $timestamps = false;
    
    public function country()
    {
        return $this->hasMany('App\Country','ContinentId');
    }

}
