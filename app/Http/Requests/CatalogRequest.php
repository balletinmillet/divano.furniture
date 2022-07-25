<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CatalogRequest extends FormRequest
{
    protected $entity = [];
    protected $fieldCodes = ["name", "code", "parent_id", "category_id", "brand_id"];

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function attributes()
    {
        $attributes = [];
        foreach ($this->fieldCodes as $code)
            $attributes[$code] = __('app/requests.common.' . $code);

        return $attributes;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        switch ($this->method()) {
            case 'POST':
                return $this->createItem();
            case 'PUT':
            case 'PATCH':
                return $this->updateItem();
        }
    }

    protected function createItem()
    {
        return [
            'name' => [
                'required',
                'max:100',
            ],
            'code' => [
                'required',
                'max:100',
                'unique:'.$this->entity['table'].',code',
                'regex:~^[-_a-z0-9]+$~i',
            ],
            'image' => [
                'mimes:jpeg,jpg,png',
                'max:5000'
            ],
        ];
    }

    protected function updateItem()
    {
        $model = $this->route($this->entity['name']);
        return [
            'name' => [
                'required',
                'max:100',
            ],
            'code' => [
                'required',
                'max:100',
                'unique:'.$this->entity['table'].',code,'.$model->id.',id',
                'regex:~^[-_a-z0-9]+$~i',
            ],
            'image' => [
                'mimes:jpeg,jpg,png',
                'max:5000'
            ],
        ];
    }

    public function messages()
    {
        return [
            'required' => __('app/requests.common.required'),
            'max' =>  __('app/requests.common.max'),
            'min' =>  __('app/requests.common.min'),
            'unique' => __('app/requests.common.unique'),
            'code.regex' => __('app/requests.common.codeRegex'),
            'image.mimes' => __('app/requests.common.imageMimes'),
            'image.max' => __('app/requests.common.imageMax'),
        ];
    }
}
