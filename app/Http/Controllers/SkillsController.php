<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function skill() {
        $data = 'Teamwork & Collaboration';
        return view('Skills', ['skills' => $data]);
    }
}