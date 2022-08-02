<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Property extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name', 'code'];
    protected $visible = ['name', 'code'];

    public function propertyOptions()
    {
        return $this->hasMany(PropertyOption::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    public function scopeByCode($query, $code)
    {
        return $query->where('code', $code);
    }
}
