<?php

namespace App\Http\Requests;

class PropertyOptionCatalogRequest extends CatalogRequest {

    /**
     * @var array
     */
    protected $entity = [
        'name' => 'property_option',
        'table' => 'property_options'
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
        $rules = ['code' => []];
        return array_merge(parent::createItem(), $rules);
    }

    protected function updateItem()
    {
        $rules = ['code' => []];
        return array_merge(parent::updateItem(), $rules);
    }
}
