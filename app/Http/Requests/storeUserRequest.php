<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeUserRequest extends FormRequest
{

    public function authorize(): bool
    {
        return $this->use() && $this->uesr()->role === 'admin';
    }


    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unque:users,email',
            'password' => 'required|string|min:8',
            'role' => 'in:admin,user',
        ];
    }
}
