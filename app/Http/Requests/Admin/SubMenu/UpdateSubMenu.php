<?php

namespace App\Http\Requests\Admin\SubMenu;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateSubMenu extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.sub-menu.edit', $this->subMenu);
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
            'slug' => ['nullable', Rule::unique('sub_menus', 'slug')->ignore($this->subMenu->getKey(), $this->subMenu->getKeyName()), 'string'],
            'icon_url' => ['nullable', 'string'],
            'order' => ['nullable', 'integer'],
            'is_active' => ['sometimes', 'boolean'],
            'menu_id' => ['nullable', 'integer'],
            
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
