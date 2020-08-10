<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Price;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Input;

class PriceController extends Controller
{
    public function getPrice()
    {

        $prices = Price::all();

        return view('admin.price', compact('prices'));
        
    }

    public function addPrice()
    {
        $prices = Price::all();

        return view('admin.add_prices', compact('prices'));
    }

    public function create(Request $request)
    {
        $request->validate([ 
            'name' => 'required|string|max:50',
            'price'=> 'required|string|max:5',
        ]);
         
        $name = $request->input('name');
        $price = $request->input('price');
    
            Price::insert([ 
                'name' => $name,
                'price' => $price,
                'created_at' => now(),
                'updated_at' => now()
            ]);
      
    
        return redirect()->back()->with('message', 'Успешно добавлена цена');
    
    }

    public function updatePage($id)
    {
        $data = Price::find($id);
        return view('admin.update_prices', compact('data'));
    }

    public function priceUpdate(Request $request)
    {
        $this->validate(request(), [ 
            'name' => 'required|string|max:50',
            'price'=> 'required|string|max:50',
        ]);

 
        $name = $request->input('name');
        $id = $request->input('id');
        $price = $request->input('price');
       

        $prices = Price::find($id); 
        $prices->name = $name;
        $prices->price = $price;
        $prices->save();
        return redirect()->back()->with('message', 'Запись успешно обновлено');
    }

    public function remove($id)
    {

        $prices = Price::find($id);
        $prices->delete($id);
        return redirect()->back()->with('message', 'Запись успешно удалена');
    }
}
