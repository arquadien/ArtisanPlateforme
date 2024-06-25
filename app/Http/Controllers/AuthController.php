<?php

namespace App\Http\Controllers;

use App\Models\Metier;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //

    public function inscriptionForm(){
        $metiers = Metier::all();
        return view('Auth.inscription', ['metiers' => $metiers]);
    }

    public function connexionForm(){
        return view('Auth.Connecter');
    }


}
