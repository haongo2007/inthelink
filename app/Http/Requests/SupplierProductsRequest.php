<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SupplierProductsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        switch($this->method())
        {
            case 'GET':
            case 'DELETE':
            {
                return [
                    //
                ];
            }
            case 'POST':
            {
                return [
                    'title' => [
                        'required', 'min:5'
                    ],
                    'price' => [
                        'required', 'min:3'
                    ],
                    'file' => 'required','|image|mimes:jpeg,png,jpg,gif,svg|max:512'
                ];
            }
            case 'PUT':
                return [
                   'title' => [
                        'required', 'min:5'
                    ],
                    'price' => [
                        'required', 'min:3'
                    ]
                ];
            case 'PATCH':
            default:break;
        }
    }
}
