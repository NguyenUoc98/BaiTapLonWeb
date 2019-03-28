<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\House;

class PageController extends Controller
{
    public function getIndex(){
        $houses = House::orderBy('created_at','desc')->paginate(9);
        return view('pages.home', compact('houses'));
    }

    public function getCategory(Request $request){
        $houses = House::where('type_id', $request->id)->paginate(9);
        return view('pages.category', compact('houses'));
    }
}
