<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class AnnonceRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
		    'categorie_id' => 'required',
		   	'subcategorie_id' => 'required',
			'state_id' => 'required',
			'type_annonce' => 'required',
			'titre' => 'required|max:60',
			'marque' => 'required|max:50',
			'anne' => 'required|max:2099|min:1990|numeric',
			'taille' => 'required|max:10',
			'modele' => 'required|max:60',
			'etat' => 'required',
			'couleur' => 'required',
			'quantite' => 'required|numeric',
			'prix' => 'required|regex:/^\d+(\.\d{1,2})?$/',
		];
    }
}
