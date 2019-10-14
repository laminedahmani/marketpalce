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
			'marque' => 'max:50',
			'anne' => 'numeric',
			'taille' => 'max:10',
			'modele' => 'max:60',
			'etat' => 'required',
			
			'quantite' => '|numeric',
			'prix' => 'required|regex:/^\d+(\.\d{1,2})?$/',
			'autre_images.*' => 'mimes:jpg,jpeg,bmp,png|max:5000',
			'img_principale' => 'mimes:jpg,jpeg,bmp,png|max:5000',
            'autre_images' => 'max:5',
		];
    }
	 public function messages()
    {
        return [
           "autre_images.max" => "les photo ne peuvent pas dépacer 5."
        ];
    }
}
