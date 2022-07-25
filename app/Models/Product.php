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
}
