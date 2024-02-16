<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    public function index() {
        $data = array (
            'name' => "Khurt",
            'surname' => "Wigwigan",
            'bday' => "Sep 30, 2003",
            'age' => "20 years old"
        );
        return view('AboutMe', ['data' => $data]);
    }
}