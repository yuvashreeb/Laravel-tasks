<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    protected $table = 'Currency';
    protected $primarykey = 'Id';
    protected $fillable = ['Id', 'Name', 'Code','Number','DigitalAfterDecimal', 'CreatedAt', 'IsActive'];
    public $timestamps = false;
}
