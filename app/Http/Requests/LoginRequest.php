<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
           'numero_de_telephone'=>['required'],
           'mot_de_passe'=>['required', 'min:4']
        ];
    }

    public function erreurs (){
        return[
            'umero_de_telephone.required'=>'Entrez svp votre numero',
            'mot_de_passe.required'=>'Entrez svp votre mot de passe',
            'mot_de_passe.min:4'=>'Votre mot de passe doit faire au minimum 4 caractères ',
        ];

    }
}
