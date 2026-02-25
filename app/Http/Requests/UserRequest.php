<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    
    public function rules(): array
    {
        
        $userId = $this->route('user') ? $this->route('user')->id : null;

        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $userId,
            'role' => 'required|in:Admin,User,admin,user',
            'password' => $this->isMethod('post') ? 'required|min:6' : 'nullable|min:6',
        ];
    }
}
