<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'name' => 'required|string|min:5|max:50',
            'email' => [
              'required', 'email',
              Rule::unique('users')->ignore(auth()->id())
            ],
            'password' => 'nullable|min:6|max:24|confirmed',
            'old_password' => 'required_with:password|password',
        ];
    }
}
