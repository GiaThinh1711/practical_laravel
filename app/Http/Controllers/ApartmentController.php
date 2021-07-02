<?php

namespace App\Http\Controllers;

use App\Models\Apratment;
use Illuminate\Http\Request;

class ApartmentController extends Controller
{
    public function all(){
        $part = Apratment::all();
        return view("home");
    }
}
