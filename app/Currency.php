<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    protected $table = 'Currency';
    protected $primarykey = 'CurrencyId';
    protected $fillable = ['CurrencyId', 'CurrencyName', 'CurrencyCode','CurrencyNumber','DigitalAfterDecimal', 'CreatedAt', 'IsActive'];
    public $timestamps = false;
}
