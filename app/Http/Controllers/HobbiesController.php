<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbiesController extends Controller
{
    public function hobby() {
        $data = 'watching anime and playing Basketball';
        return view('Hobbies', ['hobby' => $data]);
    }
    
}