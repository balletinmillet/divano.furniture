<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Sku;
use App\Tools\Template;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index()
    {
        $categories = Category::get();
        $brands = Brand::get();
        return view(Template::route() .'catalog.index', compact('categories', 'brands'));
    }

    public function category($code)
    {
        $category = Category::where('code', $code)->firstOrFail();
        $lastVisitedProducts = $category->products;
        return view(Template::route() .'catalog.category', compact('category', 'lastVisitedProducts'));
    }

    public function product($category, $productCode)
    {
        $product = Product::where('code', $productCode)->firstOrFail();
        return view(Template::route() .'catalog.product', compact('product'));
    }

    public function sku($categoryCode, $productCode, Sku $sku)
    {
        if ($sku->product->code != $productCode)
            abort(404, 'Product not found');

        if ($sku->product->category->code != $categoryCode)
            abort(404, 'Category not found');

        $skuPropertyOptions = $sku->selectedPropertyOptions();
        $skusProperties = $sku->propertyStructure();
        //$skusProperties = $sku->product->skusProperties();
        return view(Template::route() .'catalog.sku', compact('sku', 'skuPropertyOptions', 'skusProperties'));
    }

}
