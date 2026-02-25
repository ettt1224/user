<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{
    public function authorize(): bool
    {
        // 檢查目前登入者是否存在，且其 role 是否為 admin
        return true;
    }

        public function rules(): array
    {
        return [
            'name' => 'sometimes|string|max:255',
            'email' => 'sometimes|email|unique:users,email,' . $this->user->id,
            'password' => 'sometimes|string|min:8',
            'role' => 'in:admin,user',
        ];
    }

}
