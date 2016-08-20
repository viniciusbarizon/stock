<?php

namespace stock\Http\Requests;

use stock\Http\Requests\Request;

class ProductsRequest extends Request
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
            'name' => 'required|min:5',
            'description' => 'required|max:255',
            'value' => 'required|numeric',
            'quantity' => 'required|numeric'
        ];
    }

    public function messages ()
    {
        return [ 'required' => 'The :attribute field can not be empty.' ];
    }
}
