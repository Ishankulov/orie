<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teams;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Input;


class TeamsController extends Controller
{
    public function getTeam()
    {

        $teams = Teams::all();

        return view('admin.team', compact('teams'));
        
    }

    public function addTeam()
    {
        $teams = Teams::all();

        return view('admin.add_team', compact('teams'));
    }

    public function create(Request $request)
    {
        $request->validate([ 
            'name' => 'required|string|max:50',
            'profession'=> 'required|string|max:50',
            'image' => 'mimes:jpg,png,jpeg|max:2000',
        ]);
         
        $name = $request->input('name');
        $profession = $request->input('profession');
        $image = $request->file('image');

        if($image   != null) {

            $new_date = now();
            $hash = hash('sha256', $new_date). '.' . $image->getClientOriginalExtension();
            if(\File::exists(public_path('images/teams/')) == false){
                \File::makeDirectory(public_path('images/teams/'), 0777, true, true);
                }
            $image = Image::make($request->file('image'))->save(public_path('images/teams/').$hash);

            Teams::insert([ 
                'name' => $name,
                'profession' => $profession,
                'image' => $hash,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }else{
            Teams::insert([ 
                'name' => $name,
                'profession' => $profession,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }

        return redirect()->back()->with('message', 'Успешно добавлен отзыв');
    
    }

    public function updatePage($id)
    {
        $data = Teams::find($id);
        return view('admin.update_team', compact('data'));
    }

    public function teamUpdate(Request $request)
    {
        $this->validate(request(), [ 
            'name' => 'required|string|max:50',
            'profession'=> 'required|string|max:50',
        ]);

        
      
        $name = $request->input('name');
        $id = $request->input('id');
        $profession = $request->input('profession');
        $image = $request->file('image');
       

        $teams = Teams::find($id); 
        $teams->name = $name;
        $teams->profession = $profession;
        $teams->save();
        return redirect()->back()->with('message', 'Запись успешно обновлено');
    }

    public function remove($id)
    {

        $teams = Teams::find($id);
        if(\File::exists(public_path('images/teams/'.$teams->image)))
        {
            \File::delete(public_path('images/teams/'.$teams->image));
        }
        $teams->delete($id);
        return redirect()->back()->with('message', 'Запись успешно удалена');
    }
}
