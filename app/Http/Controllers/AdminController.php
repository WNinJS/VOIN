<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Complex;
use App\Category;
use App\Capability;
use App\Team;
use App\Article;
use App\Document;
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
        $goverDogs = Category::where('id','=', 4)->get('*');
        $giveAccess = User::where('type','pending')->get();
        $members = Team::all();
        $articles = Article::all();
        $documents = Document::all();

        
                
        return view('admin.adminMain')
        ->with('complexes',$complexses)
        ->with('home',$home)
        ->with('warDogs',$warDogs)
        ->with('giveAccess',$giveAccess)
        ->with('members',$members)
        ->with('articles', $articles)
        ->with('documents',$documents)
        ->with('goverDogs',$goverDogs);
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


    //Добавляем новую возможность в государственные структуры
    public function addNewGover(Request $request)
    {
        $desc = $request->desc;
        $icon = $request->file('goverDogIcon')->store('uploads','public');

        $cap = new Capability;
        $cap->name ="";
        $cap->desc = $desc;
        $cap->category_id = 4;
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

    //метод для добавления нового члена команды
    public function addMemmber(Request $request){
        $img = $request->file('member_image')->store('members','public');

        $member = new Team();
        $member->fullname = $request->name;
        $member->position = $request->position;
        $member->photo = $img;
        $member->save();

        return redirect()->back();
    }
    //метод для удаления члена команды
    public function deleteMember($id){
        $member = Team::where('id',$id);
        $member->delete();

        return redirect()->back();
    }

    //метод для редактирования члена команды
    public function editMember(Request $request, $id){
        $img = $request->file('avatar')->store('members','public');

        $member = Team::where('id',$id)->first();
        $member->fullname = $request->fullname;
        $member->position = $request->position;
        $member->photo = $img;
        $member->save();

        return redirect()->back();
    }

    //метод для добавления новой статьи
    public function addArticle(Request $request){
        $img = $request->file('article_image')->store('articles','public');

        $article = new Article();
        $article->name = $request->name;
        $article->description = $request->description;
        $article->img = $img;
        $article->save();

        return redirect()->back();
    }

    //метод для удаления статьи
    public function deleteArticle(Request $request, $id){

        $article = Article::where('id',$id)->first();
        $article->delete();

        return redirect()->back();
    }

    //Для редактирования статьи 
    public function editArticle(Request $request, $id){
        $img = $request->file('article_image')->store('articles','public');

        $article = Article::where('id',$id)->first();
        $article->name = $request->name;
        $article->description = $request->description;
        $article->img = $img;
        $article->save();

        return redirect()->back();
    }

    //Для добавления нового документа
    public function addDocument(Request $request){

        $document = $request->file('document')->store('documents','public');

        $doc = new Document();
        $doc->name = $request->name;
        $doc->file = $document;
        $doc->save();
        return redirect()->back();
    }

    //Для удаления документа
    public function deleteDocument(Request $request, $id){

        $doc = Document::where('id',$id);
        $doc->delete();
        return redirect()->back();
    }

}
