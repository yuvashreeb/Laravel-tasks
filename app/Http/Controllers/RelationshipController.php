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

class RelationshipController extends BaseController {

    public function example() {
        echo "<h2><i>hasMany Relation</i></h2>";
        $countries = Continent::find(1)->Country->all();
        //print_r($countries);
        echo "<b>Continent hasmany countries</b><br>";
        foreach ($countries as $country) {
            echo $country . "<br/>";
        }
        $State = Country::find(1)->State->all();
        // print_r($State);
        echo "<b>Country hasmany States</b><br>";
        foreach ($State as $states) {
            echo $states . "<br/>";
        }

        $City = State::find(1)->City->all();
        //print_r($City);
        echo "<b>State hasmany Cities</b><br>";
        foreach ($City as $cities) {
            echo $cities . '<br/>';
        }

        echo "<h2><i>belongsTo</i></h2>";
        echo Country::find(1)->Continent . "<br>";
        echo State::find(1)->Country . "<br>";
        echo City::find(1)->State . "<br>";

        echo "<h2><i>hasOne</i></h2>";
        echo Country::find(1)->OneContinent;

        echo "<h2><i>hasManyThrough</i></h2>";
        echo "<h3>getting country to city hasmanythrough values</h3>";
        $many = Country::find(1)->City->all();
        //print_r($many);
        foreach ($many as $city) {
            echo $city . '<br>';
        }
        echo "<h3>getting continent to state hasmanythrough values</h3>";
        $ThroughState = Continent::find(1)->ThroughState->all();
        foreach ($ThroughState as $state) {
            echo $state;
        }
//        $post=State::find(1)->States;
//        foreach($post->City as $value){
//            echo $value->Id;
//        }
    }

}
