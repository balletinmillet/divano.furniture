<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sku extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['product_id', 'count', 'price'];
    protected $visible = ['id', 'count', 'price', 'product_name'];
    protected $linkedProperties = ['color', 'size'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function propertyOptions()
    {
        return $this->belongsToMany(PropertyOption::class, 'sku_property_option')->withTimestamps();
    }

    public function isAvailable()
    {
        return !$this->product->trashed() && $this->count > 0;
    }

    public function getPriceForCount()
    {
        if(!is_null($this->pivot))
            return $this->pivot->count * $this->price;

        return $this->price;
    }

    public function selectedPropertyOptions()
    {
        $propertyOptions = [];
        foreach ($this->product->properties as $index => $property)
        {
            foreach ($this->propertyOptions as $propertyOption)
                $propertyOptions[$propertyOption->property->code] = $propertyOption->name;
        }

        return $propertyOptions;
    }

/*    public function propertyStructure()
    {
        $selectedProperties = [];
        $skusProperties = $this->product->skusProperties();
        $selectedPropertyOptions = $this->selectedPropertyOptions();

        foreach ($skusProperties as $propertyName => $property)
        {
            foreach ($property as $propertyValue)
                $selectedProperties[$propertyName][$propertyValue]  = $selectedPropertyOptions[$propertyName] === $propertyValue ? 'checked' : '';
        }

        return $selectedProperties;
    }*/

    public function propertyStructure()
    {
        $propertyStructure = [];
        $skusProperties = $this->product->skusProperties();
        $selectedPropertyOptions = $this->selectedPropertyOptions();

        foreach ($selectedPropertyOptions as  $selectedPropertyName => $selectedPropertyValue)
        {
            $selectedPropertyArray = $skusProperties[$selectedPropertyName][$selectedPropertyValue];
            foreach ($skusProperties as $propertyName => $propertyOptions)
            {
                if($propertyName === $selectedPropertyName && !in_array($propertyName, $this->linkedProperties))
                    continue;

                foreach ($propertyOptions as $propertyOptionName => $propertyOptionValues)
                {
                    foreach ($propertyOptionValues as $propertyOptionValue)
                    {
                        if(in_array($propertyOptionValue, $selectedPropertyArray))
                            $propertyStructure[$propertyName][$propertyOptionName] = $propertyOptionValue;
                    }
                }
            }
        }

        return $propertyStructure;
    }
}
