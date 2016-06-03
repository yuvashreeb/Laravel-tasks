<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use App\Continent;
use App\Country;
use App\State;
use App\City;

class Relationship extends BaseController
{
     public function example()
     {
         $country= Continent::find(2)->country;
         echo $country;
         echo Country::find(2)->Continent;
//         foreach ($country as $comment) {
//             echo $comment.'<br>';
//         }
     }
    
}
