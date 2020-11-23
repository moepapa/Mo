<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSeedlingFormRequest extends FormRequest
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
            'myan_name'      =>  'required|max:255',
            'eng_name'      =>  'required|max:255',
            'botany_name'      =>  'required|max:255',
            'race'       =>  'required',
            'type_id'  =>  'required|not_in:0',
            'price'     =>  'required|regex:/^\d+(\.\d{1,2})?$/',
            'special_price'     =>  'regex:/^\d+(\.\d{1,2})?$/',
            'quantity'  =>  'required|numeric',
        ];
    }
}
