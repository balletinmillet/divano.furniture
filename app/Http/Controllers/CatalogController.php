<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Tools\Template;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function catalog()
    {
        $categories = Category::get();
        $brands = Brand::get();
        return view(Template::route() .'catalog', compact('categories', 'brands'));
    }
}
