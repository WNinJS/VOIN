<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class MainController extends Controller
{
    public function renderHomePetPage()
    {

        $homeCap = Category::where('id','=', 1)->get();

        return view('main.home-pets')->with('homeCap',$homeCap);
    }
    public function renderPetWorkers()
    {
        # code...
        $petWorker =  Category::where('id','=', 3)->get();

        return view('main.pet-worker')->with('petWorker', $petWorker);
    }

    public function renderGovermentPets(Request $req)
    {
        # code...

        return view('main.gover-pets');
    }
}
