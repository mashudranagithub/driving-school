<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $services = Service::all();
        return view('homepage', compact('services'));
    }


}
