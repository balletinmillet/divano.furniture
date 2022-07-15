<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Tools\Template;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(Request $request)
    {
        $categories = Category::paginate(3);
        $products = Product::paginate(6);
        return view(Template::route() .'index', compact('categories', 'products'));
    }
}
