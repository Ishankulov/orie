<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function getFaqs()
    {

        $faqs = Faq::all();

        return view('admin.faq', compact('faqs'));
        
    }

    public function addFaq()
    {
        $faqs = Faq::all();

        return view('admin.add_faq', compact('faqs'));
    }

    public function create(Request $request)
    {
        $request->validate([ 
            'question' => 'required|string|max:50',
            'answer'=> 'required|string',
        ]);
         
        $question= $request->input('question');
        $answer = $request->input('answer');
    
        Faq::insert([ 
                'question' => $question,
                'answer' => $answer,
                'created_at' => now(),
                'updated_at' => now()
            ]);
      
    
        return redirect()->back()->with('message', 'Успешно добавлен FAQ');
    
    }

    public function remove($id)
    {

        $faqs = Faq::find($id);
        $faqs->delete($id);
        return redirect()->back()->with('message', 'Запись успешно удалена');
    }
}
