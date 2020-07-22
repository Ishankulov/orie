<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ClientHome;
use App\Models\Banners;

class ClientHomeController extends Controller
{
    public function getHome()
    {
        $banner = Banners::where('types', 'slider')->first(); 
        $banner_footer = Banners::where('types', 'footer')->first();
        $banner_content = Banners::where('types', 'content')->first();
        return view('welcome', compact('banner', 'banner_footer', 'banner_content'));
    }
    
}
