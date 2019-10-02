<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class MembreRequest extends FormRequest
{
	//customer array error membre
	protected $errorBag = 'membre';
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
		    'email' => 'email|required|unique:membres,email,'.$this->id,
		   	'password' => 'required|min:6|confirmed',
			'password_confirmation' => 'required',
			//'type_magasin' => 'required',
			'nom' => 'required|max:20',
			'prenom' => 'required|max:20',
			//'nom_magasin' => 'required|max:20',
			'tel' => 'required|max:15',
			'state_id' => 'required',
	    	//'secteur_activite' => 'required|max:30',
		];
    }
}
