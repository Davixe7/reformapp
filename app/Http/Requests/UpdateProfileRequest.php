<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
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
            'name' => 'required|min:5|max:30',
            'email' => 'required|email',
            'phone_1' => 'nullable|numeric',
            'phone_2' => 'nullable|numeric',
            'description' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:150',
            'profile_picture' => 'nullable|string'
        ];
    }
}
