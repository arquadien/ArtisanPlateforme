<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\Artisan;
use App\Models\Metier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AuthController extends Controller
{
    //

    public function inscriptionForm(){
        $metiers = Metier::all();
        return view('Auth.inscription', ['metiers' => $metiers]);
    }

    public function enregistrement(Request $request)
    {
        // Validation des données du formulaire
        $validatedData = $request->validate([
            'nom' => 'required|string',
            'prenoms' => 'required|string',
            'password' => 'required|string|min:8', //règle de validation pour le mot de passe
            'verification_mdp' => 'required|same:password',
            'phone' => 'required|string',
            'numero_whatsapp' => 'required|string',
            'metier_id' => 'required|exists:metiers,id', // Vérifie que metier_id existe dans la table metiers
            'annee_experience' => 'required|string',
            'ville' => 'required|string',
            'commune' => 'required|string',
            'quartier' => 'required|string',
            'sexe' => 'required|in:homme,femme',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', //  validation pour l'upload de photo
        ]);

        // Gestion de l'upload de la photo
        $photoPath = $request->file('photo')->store('photos', 'public');

        // Création d'une nouvelle instance de l'artisan avec les données validées
        $artisan = new Artisan();
        $artisan->nom = $validatedData['nom'];
        $artisan->prenoms = $validatedData['prenoms'];
        $artisan->password = bcrypt($validatedData['password']); // Cryptage du mot de passe
        $artisan->phone = $validatedData['phone'];
        $artisan->numero_whatsapp = $validatedData['numero_whatsapp'];
        $artisan->metier_id = $validatedData['metier_id'];
        $artisan->annee_experience = $validatedData['annee_experience'];
        $artisan->ville = $validatedData['ville'];
        $artisan->commune = $validatedData['commune'];
        $artisan->quartier = $validatedData['quartier'];
        $artisan->sexe = $validatedData['sexe'];
        $artisan->photo = $photoPath; // Enregistre le chemin de la photo dans la base de données

        // Sauvegarde de l'artisan
        $artisan->save();

        // Redirection avec un message de succès (vous pouvez personnaliser selon vos besoins)
        return redirect()->route('connexionForm')->with('success', 'Inscription réussie !');

    }

    public function connexionForm(){
        return view('Auth.Connecter');
    }

    public function connexion(Request $request){
        //dd($request->only(['phone', 'password']));

        $credentials = $request->validate([
            'phone' => ['required'],
            'password' => ['required'],
        ]);

       // dd($credentials);
        //dd(Auth::attempt($credentials));
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();;

            return redirect()->intended(route('profil'));
        }

        return redirect()->back()->with('erreur', 'Parametre de connexion incorret !')->onlyInput('phone');


    }


}
