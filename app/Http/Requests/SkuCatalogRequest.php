<?php

namespace App\Http\Requests;

class SkuCatalogRequest extends CatalogRequest {

    /**
     * @var array
     */
    protected $entity = [
        'name' => 'sku',
        'table' => 'skus'
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
            'name' => [],
            'code' => [],
            'price' => [
                'required',
                'numeric',
                'min:1'
            ],
            'count' => [
                'required',
                'numeric',
                'min:0',
            ]
        ];

        return array_merge(parent::createItem(), $rules);
    }

    protected function updateItem()
    {
        $rules = [
            'name' => [],
            'code' => [],
            'price' => [
                'required',
                'numeric',
                'min:1'
            ],
            'count' => [
                'required',
                'numeric',
                'min:0',
            ]
        ];

        return array_merge(parent::updateItem(), $rules);
    }
}
