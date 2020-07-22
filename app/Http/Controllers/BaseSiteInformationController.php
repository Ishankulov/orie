<?php

namespace App\Http\Controllers;

use App\Models\BaseSiteInformation;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Input;

class BaseSiteInformationController extends Controller
{
    public function getInfo()
    {
        $information = BaseSiteInformation::all();
        
        return view('admin.base_site_information', compact('information'));
    }

    public function addInfoPage()
    {

        return view('admin.add_info_site');
    }

    public function create(Request $request)
    {
        $data = BaseSiteInformation::all();

        if($data->count() > 0)
        {
            return redirect()->back()->withErrors(['error' => 'You can not add second data']);
        }

        $request->validate([
            'phone'  => 'required|numeric',
            'email' => 'required|max:50',
            'addres' => 'required|max:50',
        ]);

        $phone = $request->input('phone');
        $email = $request->input('email');
        $addres = $request->input('addres');

        BaseSiteInformation::insert([
            'phone'       => $phone,
            'email'       => $email,
            'addres'       => $addres,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->back()->with('message', 'Успешно добавлена информация');
    }

    public function updatePage($id)
    {
        $data = BaseSiteInformation::find($id);
        return view('admin.update_base_info', compact('data'));
    }

    public function infoUpdate(Request $request)
    {
        $id = $request->input('id');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $addres = $request->input('addres');

        $info = BaseSiteInformation::find($id);
        $info->phone = $phone;
        $info->email = $email;
        $info->addres = $addres;
        $info->save();

        return redirect()->back()->with('message', 'Запись успешно обновлено');
    }

    public function remove($id)
    {
        $info = BaseSiteInformation::find($id);
        $info->delete($id);
        return redirect()->back()->with('message', 'Запись успешно удалена');
    }

}
