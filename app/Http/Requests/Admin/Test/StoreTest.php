<?php

namespace App\Http\Requests\Admin\Test;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StoreTest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.test.create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'string'],
            // 'slug' => ['required', Rule::unique('tests', 'slug'), 'string'],
            'description' => ['nullable', 'string'],
            'language' => ['required', 'string'],
            'enabled' => ['required', 'boolean'],
            'ispaid' => ['nullable', 'boolean'],
            'price' => ['required', 'numeric'],
            'date' => ['nullable', 'date'],
            'announce_date' => ['nullable', 'date'],
            'last_date' => ['nullable', 'date'],
            'individual_result' => ['nullable', 'boolean'],
            'overall_result' => ['nullable', 'boolean'],
            'province_result' => ['nullable', 'boolean'],
            'zone_result' => ['nullable', 'boolean'],
            'district_result' => ['nullable', 'boolean'],
            'instant_result' => ['nullable', 'boolean'],
            'test_duration' => ['required', 'integer'],
            'is_finished' => ['nullable', 'boolean'],
            'is_hidden' => ['nullable', 'boolean'],
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

        return $sanitized;
    }
}
