<?php

namespace App\Http\Controllers;

use App\Http\Controllers\DB;
use App\Models\Article;
use App\Models\DemandeDeService;
use App\Models\Metier;
use Exception;
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
        $metiers = Metier::all();
        return view('Formulairedemandedeservice', ['metiers'=>$metiers]);
    }

    public function DemandeService(Request $request){
        //dd($request);
      try{
        $data = $request->validate([
            'nom' => 'required|string',
            'prenoms' => 'required|string',
            'phone' => 'required|string',
            'metier_id' => 'required|exists:metiers,id', // Vérifie que metier_id existe dans la table metiers
            'ville' => 'required|string',
            'commune' => 'required|string',
            'quartier' => 'required|string',
            'description' => 'required|string',
            'sexe' => 'required|in:homme,femme',
        ]);

        
        $demande = new DemandeDeService();
        $demande->nom = $data['nom'];
        $demande->prenoms = $data['prenoms'];
        $demande->phone = $data['phone'];
        $demande->metier_id = $data['metier_id'];
        $demande->ville = $data['ville'];
        $demande->commune = $data['commune'];
        $demande->quartier = $data['quartier'];
        $demande->description = $data['description'];
        $demande->sexe = $data['sexe'];
        $demande->save();

        
        return redirect(route('listedartisans'));

      }catch(Exception $e){
        dd($e);
      }

    }

    public function liste(){
        return view('listedartisans');
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
