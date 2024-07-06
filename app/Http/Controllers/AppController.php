<?php

namespace App\Http\Controllers;

use App\Http\Controllers\DB;
use App\Models\Article;
use App\Models\Metier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppController extends Controller
{
    // ###########  fonction d'affichage des pages  ##################
    public function index (Request $request) {
        $metiers = Metier::take(4)->get();//afficher la page index avec 4 servive
        return view('Acceuil', ['metiers' => $metiers]);
    }

        //renvoi la page  plus de service avec la liste de tous les service 
    public function plusService (){
        $metiers = Metier::all();//recupère  les information sur les metiers 
        return view('PlusDeService', ['metiers' => $metiers]);
    }

    public function infosurnosservice($id){
        $details = Metier::find($id);//recupère les information sur un metier précis 
        return view('infosurnosservice', ['details'=> $details]);
    }


    public function service (){
        return view('Formulairedemandedeservice');
    }

    public function contact (){
        return view('Contact');
    }

    public function abonnement (){
        return view('Abonnements');
    }

    public function profil (){
       $metier = Metier::find(Auth::user()->metier_id);
       $articles = Article::where('user_id',auth()->user()->id)->take(2)->get();
      
        return view('profil', ['metier'=> $metier, 'articles'=>$articles]);
    }

}
