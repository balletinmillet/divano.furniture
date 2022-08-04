<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PropertyOptionCatalogRequest;
use App\Http\Requests\PropertyOptionRequest;
use App\Models\Property;
use App\Models\PropertyOption;
use App\Tools\Template;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PropertyOptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(Property $property)
    {
        $propertyQuery = PropertyOption::with('property')->where('property_id', $property->id);
        $propertyOptions = $propertyQuery->paginate(Template::paginationItemsCount('propertyOption'));
        return view(Template::route() . 'admin.catalog.property_options.index', compact('propertyOptions', 'property'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create(Property $property)
    {
        return view(Template::route() . 'admin.catalog.property_options.create', compact('property'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param PropertyOptionCatalogRequest $request
     * @param Property $property
     * @return RedirectResponse
     */
    public function store(PropertyOptionCatalogRequest $request, Property $property)
    {
        $params = $request->all();
        $params['property_id'] = $request->property->id;

        PropertyOption::create($params);
        return redirect()->route( 'admin.catalog.property-options.index', $property);
    }

    /**
     * Display the specified resource.
     *
     * @param Property $property
     * @param PropertyOption $propertyOption
     * @return Application|Factory|View
     */
    public function show(Property $property, PropertyOption $propertyOption)
    {
        return view(Template::route() . 'admin.catalog.property_options.show', compact('property','propertyOption'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Property $property
     * @param PropertyOption $propertyOption
     * @return Application|Factory|View
     */
    public function edit(Property $property, PropertyOption $propertyOption)
    {
        return view(Template::route() . 'admin.catalog.property_options.edit', compact('propertyOption', 'property'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param PropertyOptionCatalogRequest $request
     * @param Property $property
     * @param PropertyOption $propertyOption
     * @return RedirectResponse
     */
    public function update(PropertyOptionCatalogRequest $request, Property $property, PropertyOption $propertyOption)
    {
        $params = $request->all();
        $propertyOption->update($params);
        return redirect()->route('admin.catalog.property-options.index', $property);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Property $property
     * @param PropertyOption $propertyOption
     * @return RedirectResponse
     */
    public function destroy(Property $property, PropertyOption $propertyOption)
    {
        $propertyOption->delete();
        return redirect()->route('admin.catalog.property-options.index', $property);
    }
}
