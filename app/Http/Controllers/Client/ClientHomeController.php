<?php

namespace App\Http\Controllers\Client;

use Illuminate\Pagination\LengthAwarePaginator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banners;
use App\Models\Feedback;
use App\Models\News;
use App\Models\Teams;
use App\Models\Price;
use App\Models\Faq;

class ClientHomeController extends Controller
{
    public function getHome()
    {
        $faqs = Faq::all();
        $prices = Price::all();
        $teams = Teams::all();
        $feedbacks = Feedback::all();
        $newsletter = News::latest()->paginate(2);
        $banner = Banners::all(); 
        $banner_footer = Banners::where('types', 'footer')->first();
        $banner_content = Banners::where('types', 'content')->first();
        return view('welcome', compact('banner', 'banner_footer', 'banner_content', 'newsletter', 'feedbacks', 'teams', 'prices', 'faqs'));
    }

    public function getmail(Request $request)
    {
        $this->validate($request, [
            'name'   =>   'required',
            'email'  =>   'required|email',
            'message'=>   'required'
        ]); 

    }
   
}
