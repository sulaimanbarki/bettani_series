<?php

namespace App\Http\Requests\Admin\DropDownMenu;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateDropDownMenu extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.drop-down-menu.edit', $this->dropDownMenu);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'title' => ['nullable', 'string'],
            'slug' => ['nullable', Rule::unique('drop_down_menus', 'slug')->ignore($this->dropDownMenu->getKey(), $this->dropDownMenu->getKeyName()), 'string'],
            'order' => ['nullable', 'integer'],
            'parent_id' => ['nullable', 'integer'],
            'is_active' => ['sometimes', 'boolean'],
            
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
