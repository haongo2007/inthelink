<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SupplierBrandsRequest extends FormRequest
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
            case 'POST':
            {
                return [
                    'name' => [
                        'required', 'min:3'
                    ],
                    'sort_order' => [
                        'required'
                    ],
                    'banner' => 'required','|image|mimes:jpeg,png,jpg,gif,svg|max:512'
                ];
            }
            case 'PUT':
                return [
                    'name' => [
                        'required', 'min:3'
                    ],
                    'sort_order' => [
                        'required'
                    ],
                    'banner' => '|image|mimes:jpeg,png,jpg,gif,svg|max:512'
                ];
            case 'PATCH':
            default:break;
        }
    }
}
