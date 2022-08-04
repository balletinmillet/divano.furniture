<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BrandCatalogRequest;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Tools\Template;
use App\Models\Brand;
use App\Tools\Image;


class BrandController extends Controller
{
    private $imageHandler;

    public function __construct()
    {
        $this->imageHandler = new Image("brand");
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $brands = Brand::paginate(Template::paginationItemsCount('brand'));
        return view(Template::route() . 'admin.catalog.brand.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $brands = Brand::all();
        return view(Template::route() . 'admin.catalog.brand.create', compact('brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return RedirectResponse
     */
    public function store(BrandCatalogRequest $request)
    {
        $fields = $request->all();
        $fields['image'] = $this->imageHandler->upload($request->image);
        $brand = Brand::create($fields);
        return redirect()
            ->route('admin.catalog.brand.show', compact('brand'))
            ->with('success', __('app/controllers.admin.brand.successCreated'));
    }

    /**
     * Display the specified resource.
     *
     * @param Brand $brand
     * @return Application|Factory|View
     */
    public function show(Brand $brand)
    {
        return view(Template::route() .'admin.catalog.brand.show', compact('brand'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Brand $brand
     * @return Application|Factory|View
     */
    public function edit(Brand $brand)
    {
        return view(Template::route() .'admin.catalog.brand.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param BrandCatalogRequest $request
     * @param Brand $brand
     * @return RedirectResponse
     */
    public function update(BrandCatalogRequest $request, Brand $brand)
    {
        $data = $request->all();
        $data['image'] = $this->imageHandler->upload($request->image, $brand);
        $brand->update($data);
        return redirect()
            ->route('admin.catalog.brand.show', compact('brand'))
            ->with('success', __('app/controllers.admin.brand.successUpdated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Brand $brand
     * @return RedirectResponse
     */
    public function destroy(Brand $brand)
    {
        if ($brand->products->count())
            return back()->withErrors(__('app/controllers.admin.brand.errorDeletedBecauseProducts'));

        $this->imageHandler->remove($brand);
        $brand->delete();
        return redirect()
            ->route('admin.catalog.brand.index')
            ->with('success', __('app/controllers.admin.brand.successDeleted'));
    }
}
