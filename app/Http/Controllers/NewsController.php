<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Input;

class NewsController extends Controller
{
    public function getNews()
    {

        $newsletter = News::all();

        return view('admin.news', compact('newsletter'));
        
    }

    public function addNews()
    {
        $newsletter = News::all();

        return view('admin.add_news', compact('newsletter'));
    }

    public function create(Request $request)
    {
        $request->validate([ 
            'title' => 'required|string|max:50',
            'news' => 'required|string|max:1000',
            'image' => 'mimes:jpg,png,jpeg|max:2000',
        ]);
         
        $title = $request->input('title');
        $news = $request->input('news'); 
        $image = $request->file('image');

        if($image   != null) {

            $new_date = now();
            $hash = hash('sha256', $new_date). '.' . $image->getClientOriginalExtension();
            if(\File::exists(public_path('images/news/')) == false){
                \File::makeDirectory(public_path('images/news/'), 0777, true, true);
                }
            $image = Image::make($request->file('image'))->save(public_path('images/news/').$hash);

            News::insert([ 
                'title' => $title,
                'news' => $news, 
                'image' => $hash,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }else{
            News::insert([ 
                'title' => $title,
                'news' => $news, 
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }

        return redirect()->back()->with('message', 'Успешно добавлен отзыв');
    
    }

    public function updatePage($id)
    {
        $data = News::find($id);
        return view('admin.update_news', compact('data'));
    }

    public function newsUpdate(Request $request)
    {
        $this->validate(request(), [ 
        'title' => 'required|string|max:50',
        'news' => 'required|string|max:1000',
        ]);

        
      
        $title = $request->input('title');
        $id = $request->input('id');
        $news = $request->input('news'); 
        $image = $request->file('image');
       

        $newsletter = News::find($id); 
        $newsletter->title = $title;
        $newsletter->news = $news; 
        $newsletter->save();
        return redirect()->back()->with('message', 'Запись успешно обновлено');
    }

    public function remove($id)
    {

        $newsletter = News::find($id);
        if(\File::exists(public_path('images/news/'.$newsletter->image)))
        {
            \File::delete(public_path('images/news/'.$newsletter->image));
        }
        $newsletter->delete($id);
        return redirect()->back()->with('message', 'Запись успешно удалена');
    }
}
