<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Input;

class FeedbackController extends Controller
{
    public function getFeedback()
    {

        $feedbacks = Feedback::all();

        return view('admin.feedback', compact('feedbacks'));
        
    }

    public function addFeedback()
    {
        $feedbacks = Feedback::all();

        return view('admin.add_feedback', compact('feedbacks'));
    }

    public function create(Request $request)
    {
        $request->validate([ 
            'name' => 'required|string|max:50',
            'profession'=> 'required|string|max:50',
            'feedback' => 'required|string|max:1000',
            'image' => 'mimes:jpg,png,jpeg|max:2000',
        ]);
         
        $name = $request->input('name');
        $profession = $request->input('profession');
        $feedback = $request->input('feedback');
        $image = $request->file('image');

        if($image   != null) {

            $new_date = now();
            $hash = hash('sha256', $new_date). '.' . $image->getClientOriginalExtension();
            if(\File::exists(public_path('images/feedbacks/')) == false){
                \File::makeDirectory(public_path('images/feedbacks/'), 0777, true, true);
                }
            $image = Image::make($request->file('image'))->save(public_path('images/feedbacks/').$hash);

            Feedback::insert([ 
                'name' => $name,
                'profession' => $profession,
                'feedback' => $feedback,
                'image' => $hash,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }else{
            Feedback::insert([ 
                'name' => $name,
                'profession' => $profession,
                'feedback' => $feedback,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }

        return redirect()->back()->with('message', 'Успешно добавлен отзыв');
    
    }

    public function updatePage($id)
    {
        $data = Feedback::find($id);
        return view('admin.update_feedback', compact('data'));
    }

    public function feedbackUpdate(Request $request)
    {
        $this->validate(request(), [ 
            'name' => 'required|string|max:50',
            'profession'=> 'required|string|max:50',
            'feedback' => 'required|string|max:1000',
        ]);

        
      
        $name = $request->input('name');
        $id = $request->input('id');
        $profession = $request->input('profession');
        $feedback = $request->input('feedback');
        $image = $request->file('image');
       

        $feedbacks = Feedback::find($id); 
        $feedbacks->name = $name;
        $feedbacks->profession = $profession;
        $feedbacks->feedback = $feedback;
        $feedbacks->save();
        return redirect()->back()->with('message', 'Запись успешно обновлено');
    }

    public function remove($id)
    {

        $feedbacks = Feedback::find($id);
        if(\File::exists(public_path('images/feedbacks/'.$feedbacks->image)))
        {
            \File::delete(public_path('images/feedbacks/'.$feedbacks->image));
        }
        $feedbacks->delete($id);
        return redirect()->back()->with('message', 'Запись успешно удалена');
    }
}
