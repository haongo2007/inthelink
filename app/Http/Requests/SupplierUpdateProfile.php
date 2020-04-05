<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class SupplierUpdateProfile extends FormRequest
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
        $sup = Auth('supplier')->user();
        if ($sup->change_password == 0) {
            return [
                'new_password' => 'required',
                'new_confirm_password' => 'required|same:new_password',
                'name' => ['required', 'min:3'],
                'email' => ['required', 'email',Rule::unique('suppliers','email')->ignore(Auth('supplier')->user()->id)],
                'address' => ['required'],
                'phone' => ['required', 'min:9'],
                'bank_name' => 'required',
                'bank_number' => ['required', 'min:9'],
                'name_shop' => ['required'],
            ];
        }else{
            return [
                'current_password' => ['required', function ($attribute, $value, $fail) use ($sup) {
                    if (!\Hash::check($value, $sup->password)) {
                        return $fail(__('The current password is incorrect.'));
                    }
                }],
                'new_password' => 'required',
                'new_confirm_password' => 'required|same:new_password',
                'name' => ['required', 'min:3'],
                'email' => ['required', 'email',Rule::unique('suppliers','email')->ignore(Auth('supplier')->user()->id)],
                'address' => ['required'],
                'phone' => ['required', 'min:9'],
                'bank_name' => 'required',
                'bank_number' => ['required', 'min:9'],
                'name_shop' => ['required'],
            ];
        }
    }
}
