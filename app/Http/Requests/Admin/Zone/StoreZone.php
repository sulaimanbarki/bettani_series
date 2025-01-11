<?php

namespace App\Http\Requests\Admin\Zone;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StoreZone extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.zone.create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'province_id' => ['required'],
            
        ];
    }

    public function getProvinceId()
    {
        if ($this->has('province_id')){
            return $this->get('province_id')['id'];
        }
        return null;
    }

    /**
    * Modify input data
    *
    * @return array
    */
    public function getSanitized(): array
    {
        $this->getProvinceId();

        $sanitized = $this->validated();

        //Add your code for manipulation with request data here

        return $sanitized;
    }
}
