<?php namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class LeerplanEditRequest extends FormRequest {

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'leerplannummer' => 'required',
            'ingang' => 'required',
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
