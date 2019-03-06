<?php
/**
 * Created by PhpStorm.
 * User: CityComp
 * Date: 27/2/2019
 * Time: 14:38
 */

namespace App\Http\Controllers;


use App\Models\City;

class cityController extends Controller
{
public  function  index(){

$cities = City::get();


    return view('city.index', ['message' => 'Here is the cities avaliable : ' , 'cities'=>$cities ]);
}
}
