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
            'titre' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'datesortie' => 'required|date',
            
            'urltrailer' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
            'univers' => 'required|string|max:255',
            'audience' => 'required|string|max:255',
            'pays' => 'required|string|max:255',
            'realisateur_id' => 'required|integer',
            'producteur_id' => 'required|integer',
            'rating' => 'required|numeric',
        ];
    }
}
