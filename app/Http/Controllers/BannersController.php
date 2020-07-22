<?php

namespace App\Http\Controllers;

use App\Models\Banners;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;



class BannersController extends Controller
{
    public function getBanner()
    {
        $banners = Banners::all();
        
        return view('admin.banner', compact('banners'));
    } 

    public function addBanner()
    {
 
        return view('admin.add_banner');

    }

    public function create(Request $request)
    {
             $request->validate([
             'name' => 'required|string|max:100',
             //'image' => 'required|mimes:jpg,png,jpeg|max:2000|dimensions:min_width=1600, min_height=645',
         ]);
        $types = $request->input('types');
        $name = $request->input('name');
        $image = $request->file('image');

        $new_date = now();

        if($types =='Не выбрано')
        {
        return redirect()->back()->with('message', 'Выберите тип');
        }

        $hash = hash('sha256', $new_date). '.' . $image->getClientOriginalExtension();
        if($types == 'slider')
        { 
            if(\File::exists(public_path('images/slider/')) == false){
                \File::makeDirectory(public_path('images/slider/'), 0777, true, true);
                }
            $image = Image::make($request->file('image'))->resize("1600", "670")
                ->save(public_path('images/slider/').$hash);
        }
        if($types == 'content')
        { 
            if(\File::exists(public_path('images/content/')) == false){
                \File::makeDirectory(public_path('images/content/'), 0777, true, true);
                }
            $image = Image::make($request->file('image'))->resize("1600", "670")
                ->save(public_path('images/content/').$hash);
        }
        if($types == 'footer')
        { 
            if(\File::exists(public_path('images/footer/')) == false){
                \File::makeDirectory(public_path('images/footer/'), 0777, true, true);
                }
            $image = Image::make($request->file('image'))->resize("1600", "670")
                ->save(public_path('images/footer/').$hash);
        }
         
        if($types == 'about_us')
        { 
            if(\File::exists(public_path('images/about_us/')) == false){
                \File::makeDirectory(public_path('images/about_us/'), 0777, true, true);
                }
            $image = Image::make($request->file('image'))->resize("1600", "670")
                ->save(public_path('images/about_us/').$hash);
        }
    

        Banners::insert([
            'name' => $name,
            'image' => $hash,
            'types' => $types,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect()->back()->with('message', 'Успешно добавлена картинка');
    }

    public function remove($id, $types)
    {
        
        $images = Banners::find($id);
        if($types == 'slider' )
        {
            if(\File::exists(public_path('images/slider/'.$images->image)))
            {
                \File::delete(public_path('images/slider/'.$images->image));
            }
        }
        elseif($types == 'content')
        {
            if(\File::exists(public_path('images/content/'.$images->image)))
            {
                \File::delete(public_path('images/content/'.$images->image));
            }
        }
        elseif($types == 'footer')
        {
            if(\File::exists(public_path('images/footer/'.$images->image)))
            {
                \File::delete(public_path('images/footer/'.$images->image));
            }
        } 
        elseif($types == 'about_us')
        {
            if(\File::exists(public_path('images/about_us/'.$images->image)))
            {
                \File::delete(public_path('images/about_us/'.$images->image));
            }
        }
   
        
        
        $images->delete();

        return back()->with('message', 'Картинка успешно удалена');
    }
}
