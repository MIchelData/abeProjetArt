<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Tache_PubliqueRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    /* 'description' => "tout documents autorisés",
    'date_debut' => strtotime("20-06-2022 18:30:23"),
    'duree' => 240,
    'titre' => "examen de prog",
    'localisation' => 'T147',
    'id_enseignant' => 2,
    'id_eleve' => null,
    'classe' => 'M49-2',
    'type' => 'examen']); */
    public function rules()
    {
        return [
            'titre' => 'required',
            'description' => 'max:500|',
            /* 'date_debut' => 'required|',
            'duree' => 'required|integer|min:1|max:1440', */
            'typeEvent'=>'required',
            'localisation'=>'required',
            'classe'=>'required|min:3|max:30'


            
            
        ];
    }
}
