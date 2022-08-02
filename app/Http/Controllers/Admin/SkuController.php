<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SkuCatalogRequest;
use App\Http\Requests\SkuRequest;
use App\Models\Product;
use App\Models\Sku;
use App\Tools\Template;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SkuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(Product $product)
    {
        $skus = $product->skus()->paginate(8);
        return view(Template::route() . 'admin.catalog.sku.index', compact('skus', 'product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create(Product $product)
    {
        return view(Template::route() . 'admin.catalog.sku.create', compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param SkuCatalogRequest $request
     * @param Product $product
     * @return RedirectResponse
     */
    public function store(SkuCatalogRequest $request, Product $product)
    {
        $fields = $request->all();
        $fields['product_id'] = $request->product->id;
        $skus = Sku::create($fields);
        $skus->propertyOptions()->sync($request->property_id);
        return redirect()->route('admin.catalog.sku.index', $product);
    }

    /**
     * Display the specified resource.
     *
     * @param Product $product
     * @param Sku $sku
     * @return Application|Factory|View
     */
    public function show(Product $product, Sku $sku)
    {
        return view(Template::route() . 'admin.catalog.sku.show', compact('product', 'sku'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Product $product
     * @param Sku $sku
     * @return Application|Factory|View
     */
    public function edit(Product $product, Sku $sku)
    {
        return view(Template::route() . 'admin.catalog.sku.edit', compact('product', 'sku'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param SkuCatalogRequest $request
     * @param Product $product
     * @param Sku $sku
     * @return RedirectResponse
     */
    public function update(SkuCatalogRequest $request, Product $product, Sku $sku)
    {
        $fields = $request->all();
        $fields['product_id'] = $request->product->id;
        $sku->update($fields);
        $sku->propertyOptions()->sync($request->property_id);
        return redirect()->route('admin.catalog.sku.index', $product);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Product $product
     * @param Sku $sku
     * @return RedirectResponse
     */
    public function destroy(Product $product, Sku $sku)
    {
        $sku->delete();
        return redirect()->route('admin.catalog.index', $product);
    }
}
