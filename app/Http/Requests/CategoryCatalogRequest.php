<?php

namespace App\Http\Requests;

class CategoryCatalogRequest extends CatalogRequest {

    /**
     * @var array
     */
    protected $entity = [
        'name' => 'category',
        'table' => 'categories'
    ];

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return parent::authorize();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return parent::rules();
    }

    protected function createItem()
    {
        $rules = [
            'parent_id' => [
                'required',
                'regex:~^[0-9]+$~',
            ],
        ];
        return array_merge(parent::createItem(), $rules);
    }

    protected function updateItem()
    {
        $rules = [
            'parent_id' => [
                'required',
                'regex:~^[0-9]+$~',
            ],
        ];
        return array_merge(parent::updateItem(), $rules);
    }
}
