<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddUser extends Model
{
    protected $table='Registration';
    protected $fillable=['FullName','Address','City','State','PhoneNumber','Email','Password'];
    public $timestamps=false;
}
