<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PropertyCatalogRequest;
use App\Http\Requests\PropertyRequest;
use App\Models\Property;
use App\Tools\Template;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $properties = Property::paginate(Template::paginationItemsCount('property'));
        return view(Template::route() . 'admin.catalog.properties.index', compact('properties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view(Template::route() . 'admin.catalog.properties.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param PropertyCatalogRequest $request
     * @return RedirectResponse
     */
    public function store(PropertyCatalogRequest $request)
    {
        Property::create($request->all());
        return redirect()->route('admin.catalog.properties.index');
    }

    /**
     * Display the specified resource.
     *
     * @param Property $property
     * @return Application|Factory|View
     */
    public function show(Property $property)
    {
        return view(Template::route() . 'admin.catalog.properties.show', compact('property'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Property $property
     * @return Application|Factory|View
     */
    public function edit(Property $property)
    {
        return view(Template::route() . 'admin.catalog.properties.edit', compact('property'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param PropertyCatalogRequest $request
     * @param Property $property
     * @return RedirectResponse
     */
    public function update(PropertyCatalogRequest $request, Property $property)
    {
        $property->update($request->all());
        return redirect()->route('admin.catalog.properties.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Property $property
     * @return RedirectResponse
     */
    public function destroy(Property $property)
    {
        $property->delete();
        return redirect()->route('admin.catalog.properties.index');
    }
}
