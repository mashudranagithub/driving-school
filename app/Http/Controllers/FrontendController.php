<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\AboutFeature;
use App\Models\Gallery;
use App\Models\Package;
use App\Models\Review;
use App\Models\Service;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $services = Service::all();
        $packages = Package::all();
        $galleryImages = Gallery::all();
        $reviews = Review::latest()->get();
        $about = About::first();
        $about_features = AboutFeature::all();

        return view('homepage', compact(
            'about',
            'about_features',
            'services',
            'packages',
            'galleryImages',
            'reviews'
        ));
    }


}
