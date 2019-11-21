<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Complex;
use App\Category;
use App\Capability;
use Exception;

class AdminController extends Controller
{
    public function index(Request $request){
        
        if (!($request->session()->exists('login')))
        {
            return redirect('/login');
        }

        $complexses = Complex::all();
        $home = Category::where('id','=', 1)->get('*');
        $warDogs = Category::where('id','=', 3)->get('*');
        
        
        
        return view('admin.adminMain')->with('complexes',$complexses)->with('home',$home)->with('warDogs',$warDogs);
    }

    //Метод для обновления нужного элемента комплекса
    public function updateComplex(Request $request, $complex_id){
        
        $complexToUpdateId = $complex_id;

        $name = $request->name;
        $description = $request->description;

        // загружаем изображение на сервер и получаем путь к нему
        $path = $request->file('img')->store('uploads','public');
        
        //запрос на обновление данных на сервере
        Complex::where('id', $complexToUpdateId)
            ->update([
                'name'=> $name,
                'description'=> $description,
                'img'=>$path,
            ]);

        //перенаправление обратно после обновления 
        return redirect()->back();
    }

    public function addNewCapabilityHome(Request $request)
    {
        $desc = $request->desc;
        $icon = $request->file('homeDogIcon')->store('uploads','public');


        $cap = new Capability;
        $cap->name ="";
        $cap->desc = $desc;
        $cap->category_id = 1;
        $cap->icon = $icon;
        $cap->save();

        return redirect()->back();

    }

    public function addNewWar(Request $request)
    {
        $desc = $request->desc;
        $icon = $request->file('homeDogIcon')->store('uploads','public');

        $cap = new Capability;
        $cap->name ="";
        $cap->desc = $desc;
        $cap->category_id = 3;
        $cap->icon = $icon;
        $cap->save();

        return redirect()->back();

    }

    public function deleteCapability($id)
    {
        try{
            Capability::find($id)->delete();}
            catch(Exception $e){ return 'hui';}
        

        return redirect()->back();
    }

    public function updateCap(Request $request,$id)
    {
        $desc = $request->desc;
        $icon = $request->file('icon')->store('uploads','public');
        Capability::where('id', $id)
            ->update([
                'desc'=> $desc,
                'icon'=>$icon,
        ]);

        return redirect()->back();
    }
}
