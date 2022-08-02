<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PropertyOption extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['property_id', 'name'];

    public function property()
    {
        return $this->belongsTo(Property::class);
    }

    public function skus()
    {
        return $this->belongsToMany(Sku::class);
    }

    public function scopeByPropertyId($query, $propertyId)
    {
        return $query->where('property_id', $propertyId);
    }
}
