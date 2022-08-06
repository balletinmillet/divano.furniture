<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'code', 'category_id', 'brand_id', 'description', 'image'];
    protected $appends = ['source_image', 'mid_image', 'thumb_image'];
    protected $catalogStorePath = "catalog/product/";

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function skus()
    {
        return $this->hasMany(Sku::class);
    }

    public function properties()
    {
        return $this->belongsToMany(Property::class, 'property_product')->withTimestamps();
    }

    public function getSourceImageAttribute(): string
    {
        return $this->getCatalogImage('source');
    }

    public function getMidImageAttribute(): string
    {
        return $this->getCatalogImage('image');
    }

    public function getThumbImageAttribute(): string
    {
        return $this->getCatalogImage('thumb');
    }

    private function getCatalogImage($imageType): string
    {
        $imagePath = $this->image ? $this->catalogStorePath . $imageType . "/" . $this->image
            : $this->catalogStorePath .'default/' . $imageType . '.png';

        return Storage::disk('public')->url($imagePath);
    }

    public function mainSku()
    {
        if($this->skus->count() > 0)
            return $this->skus->first();
        return $this;
    }

    public function skusProperties()
    {
        $skusProperties = [];
        foreach ($this->skus as $index => $sku)
        {
            foreach ($sku->propertyOptions as $propertyOption)
            {
                if(!array_key_exists($propertyOption->property->name, $skusProperties))
                {
                    $skusProperties[$propertyOption->property->code][$propertyOption->name][] = $sku->id;
                    continue;
                }

                if(!in_array($propertyOption->name, $skusProperties[$propertyOption->property->name]))
                    $skusProperties[$propertyOption->property->code][$propertyOption->name][] = $sku->id;
            }
        }

        return $skusProperties;
    }
}
