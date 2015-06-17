<?php namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class LeerplanRequest extends FormRequest {

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
            'leerplannummer' => 'required|min:3',
            'ingang' => 'required',      // uitbreiden met enkel getallen
		];
	}

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

}
