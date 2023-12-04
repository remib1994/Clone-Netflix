<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonneRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [
            'nom' => 'required'|'string'|'min:3'|'max:255',
            'prenom' => 'required'|'string'|'min:3'|'max:255',
            'date_naissance' =>'required'|'date'|'before:date',
            'sexe' => 'required',
            'role' => 'required',
            'urlphoto' => 'nullable'|'image'
        ];
    }
    public function messages()
    {
        return [
            'required' => 'ce champ est requis.',
            'min' => 'le champs doit contenir au moins 3 caractères.',
            'max' => 'le champs doit contenir au maximum 255 caractères.',
            'url' => 'le champs doit être une url, soit commencé par http ou https suivi de ://.',
            'image' => 'L\'image d\'oit être de format suivant : jpg, jpeg, png, bmp, gif, svg, or webp',
        ];
    }


}
