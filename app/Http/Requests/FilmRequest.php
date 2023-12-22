<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FilmRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'titre' => 'required|string|max:255|min:3',
            'description' => 'required|string|max:255|min:3',
            'datesortie' => 'required|date',
            'urltrailer' => 'required|string|max:255|min:3',
            'genre' => 'required|string|max:255|min:3',
            'univers' => 'required|string|max:255|min:3',
            'audience' => 'required|string',
            'pays' => 'required|string|max:255',
            'realisateur_id' => 'required|integer',
            'producteur_id' => 'required|integer',
            'rating' => 'required|numeric',
        ];
    }
    public function messages()
    {
        return [
            'required' => 'ce champ est requis.',
            'min' => 'le champs doit contenir au moins 3 caractères.',
            'max' => 'le champs doit contenir au maximum 255 caractères.',
            'url' => 'le champs doit être une url, soit commencé par http ou https suivi de ://.',
            'image' => 'L\'image d\'oit être de format suivant : jpg, jpeg',
            'before' => 'la date doit être antérieur à aujourd\'hui.' . date('Y-m-d', strtotime('today')),
            'urlphoto.max' => 'la taille de l\'image ne doit pas dépasser 4Mo',
            'integer' => 'le champs doit être un nombre entier',
            'date' => 'le champs doit être une date',
        ];
    }
}
