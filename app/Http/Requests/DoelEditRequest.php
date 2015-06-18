<?php namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DoelEditRequest extends FormRequest {

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'code' => 'string',
            'competentie' => 'string',
            'lp_id' => 'string',

            'graad_j1' => 'numeric',
            'graad_j2' => 'numeric',

            'waar_ip' => 'string',
            'waar_ep' => 'string',

            'hoe_ood' => 'string',
            'hoe_doe' => 'string',
            'hoe_project' => 'string',

//            'wie_pav' => 'string',
//            'wie_zaco' => 'string',
//            'wie_ned' => 'string',
//            'wie_mavo' => 'string',
//            'wie_wisk' => 'string',
//            'wie_lo' => 'string',

            'wanneer_vw' => 'date',
            'wanneer_wm' => 'date',
            'eva_instru' => 'string',

            'eva_dat' => 'date',

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
