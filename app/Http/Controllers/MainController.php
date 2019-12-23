<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Team;
use App\Article;
use App\Document;

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
        $petGover =  Category::where('id','=', 4)->get();

        return view('main.gover-pets')->with('petGover',$petGover);
    }

    public function renderAboutUsPage(Request $req)
    {
        # code...
        $members = Team::all();
        return view('main.about-us')
        ->with('members',$members);
    }

     public function renderMaterialsPage(Request $req)
    {
        # code...
        $documents = Document::all();
        $articles = Article::all();
        return view('main.materials')
        ->with('articles',$articles)
        ->with('documents',$documents);
    }
}
