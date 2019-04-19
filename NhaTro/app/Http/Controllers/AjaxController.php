<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\District;
use App\Town;

class AjaxController extends Controller
{
    public function getDistrictByCity(Request $request){
       return $districts = District::where('city_id', $request->city_id)->get();
    }

    public function getTownByDistrict(Request $request){
        return $towns = Town::where('district_id', $request->district_id)->get();
     }
}