<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductCatalogRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Property;
use App\Tools\Image;
use App\Tools\Template;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductController extends Controller
{
    private $imageHandler;

    public function __construct()
    {
        $this->imageHandler = new Image("product");
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $products = Product::paginate(Template::paginationItemsCount('product'));
        return view(Template::route() . 'admin.catalog.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $categories = Category::all();
        $brands = Brand::all();
        $properties = Property::all();
        return view(Template::route() .'admin.catalog.product.create', compact('categories', 'brands', 'properties'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ProductCatalogRequest $request
     * @return RedirectResponse
     */
    public function store(ProductCatalogRequest $request)
    {
        $fields = $request->all();
        $fields['image'] = $this->imageHandler->upload($request->image);
        $product = Product::create($fields);
        return redirect()
            ->route('admin.catalog.product.show', compact('product'))
            ->with('success', __('app/controllers.admin.product.successCreated'));
    }

    /**
     * Display the specified resource.
     *
     * @param Product $product
     * @return Application|Factory|View
     */
    public function show(Product $product)
    {
        return view(Template::route() . 'admin.catalog.product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Product $product
     * @return Application|Factory|View
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        $brands = Brand::all();
        $properties = Property::all();
        return view(Template::route() . 'admin.catalog.product.edit', compact('product', 'categories', 'brands', 'properties'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ProductCatalogRequest $request
     * @param Product $product
     * @return RedirectResponse
     */
    public function update(ProductCatalogRequest $request, Product $product)
    {
        $fields = $request->all();
        $fields['image'] = $this->imageHandler->upload($request->image, $product);
        $product->properties()->sync($request->property_id);
        $product->update($fields);
        return redirect()
            ->route('admin.catalog.product.show', compact('product'))
            ->with('success',  __('app/controllers.admin.product.successUpdated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Product $product
     * @return RedirectResponse
     */
    public function destroy(Product $product)
    {
        $this->imageHandler->remove($product);
        $product->delete();
        return redirect()
            ->route('admin.catalog.product.index')
            ->with('success', __('app/controllers.admin.product.successDeleted'));
    }
}
