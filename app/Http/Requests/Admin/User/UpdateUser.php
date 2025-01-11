<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateUser extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.user.edit', $this->user);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => ['sometimes', 'string'],
            'email' => ['sometimes', 'email', Rule::unique('users', 'email')->ignore($this->user->getKey(), $this->user->getKeyName()), 'string'],
            'phone' => ['sometimes', Rule::unique('users', 'phone')->ignore($this->user->getKey(), $this->user->getKeyName()), 'string'],
            'cnic' => ['nullable', 'string'],
            'gender' => ['nullable', 'string'],
            'country' => ['nullable', 'string'],
            'province' => ['nullable', 'string'],
            'district' => ['nullable', 'string'],
            'professional' => ['nullable', 'string'],
            'address' => ['nullable', 'string'],
            'active' => ['sometimes', 'boolean'],
            'password' => ['nullable', 'string'],
            'password_confirmation' => ['nullable', 'string'],

        ];
    }

    /**
     * Modify input data
     *
     * @return array
     */
    public function getSanitized(): array
    {
        $sanitized = $this->validated();


        //Add your code for manipulation with request data here

        // if password is set, then hash it, otherwise ignore it
        if (isset($sanitized['password'])) {
            $sanitized['password'] = bcrypt($sanitized['password']);
        } else {
            unset($sanitized['password']);
        }

        return $sanitized;
    }
}
