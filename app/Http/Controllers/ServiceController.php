<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        $services = [
            'Electrical cabling',
            'Power bugfixes',
            'Green energy'
        ];
        
        return view('services.index', compact('services'));
    }
}
