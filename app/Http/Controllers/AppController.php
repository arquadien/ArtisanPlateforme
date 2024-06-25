<?php

namespace App\Http\Controllers;

use App\Http\Controllers\DB;
use App\Models\Metier;
use Illuminate\Http\Request;

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

    public function abonnement (){
        return view('Abonnements');
    }

    public function profil (){
        return view('profil');
    }


    //fonction pour la récupération des metiers en base de données

}
