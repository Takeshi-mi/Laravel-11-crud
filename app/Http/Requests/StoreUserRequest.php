<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

// Feito para validações
// php artisan make:request StoreUserRequest
class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
        //só valida se o usuário tem permissão ou não pra realizar essa ação
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|min:3|max:255',
            'email' => [
                'required',
                'email',
                'unique:users,email',
                'lowercase',
            ],
            'password' => [
                'required',
                'min:6',
                'max:50',
            ]
        ];
    }
}
