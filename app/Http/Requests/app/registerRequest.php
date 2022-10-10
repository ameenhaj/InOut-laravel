<?php

namespace App\Http\Requests\app;

use Illuminate\Foundation\Http\FormRequest;

class registerRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'phone_number' => [
                'required',
            ]
            'password' => [
                'required',
            ]
            'profile_image' => [
                'required',
                'image',
            ]
            'name' => [
                'required',
            ]
            'username' => [
                'required',
            ]
            'bio' => [
                'nullable',
            ]
        ];
    }
}