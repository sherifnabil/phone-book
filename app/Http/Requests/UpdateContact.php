<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateContact extends FormRequest
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
            'name'      =>  ['required', Rule::unique('contacts')->ignore($this->name, 'name')],
            'number'    =>  'required', 'numeric', 'digits_between:10,12|unique:contacts,number,' . $this->id ,

        ];
    }

    public function messages()
    {
        return [
            'name.required'          =>  __('main.name_is_required'),
            'name.unique'            =>  __('main.name_is_unique'),
            'number.required'        =>  __('main.contact_is_required'),
            'number.numeric'         =>  __('main.contact_must_be_numeric'),
            'number.digits_between'  =>  __('main.contact_min_max'),
            'number.unique'          =>  __('main.contact_unique'),
        ];
    }
}
