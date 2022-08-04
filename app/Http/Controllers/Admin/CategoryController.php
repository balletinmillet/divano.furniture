<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryCatalogRequest;
use App\Models\Category;
use App\Tools\Image;
use App\Tools\Template;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CategoryController extends Controller
{
    private $imageHandler;

    public function __construct()
    {
        $this->imageHandler = new Image("category");
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $categories = Category::paginate(Template::paginationItemsCount('category'));
        return view(Template::route() . 'admin.catalog.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $categories = Category::all();
        return view(Template::route() . 'admin.catalog.category.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CategoryCatalogRequest $request
     * @return RedirectResponse
     */
    public function store(CategoryCatalogRequest $request)
    {
        $fields = $request->all();
        $fields['image'] = $this->imageHandler->upload($request->image);
        $category = Category::create($fields);
        return redirect()
            ->route('admin.catalog.category.show', compact('category'))
            ->with('success', __('app/controllers.admin.category.successCreated'));
    }

    /**
     * Display the specified resource.
     *
     * @param Category $category
     * @return Application|Factory|View
     */
    public function show(Category $category)
    {
        return view(Template::route() .'admin.catalog.category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Category $category
     * @return Application|Factory|View
     */
    public function edit(Category $category)
    {
        $categories = Category::all();
        return view(Template::route() .'admin.catalog.category.edit', compact('category', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CategoryCatalogRequest $request
     * @param Category $category
     * @return RedirectResponse
     */
    public function update(CategoryCatalogRequest $request, Category $category)
    {
        $data = $request->all();
        $data['image'] = $this->imageHandler->upload($request->image, $category);
        $category->update($data);
        return redirect()
            ->route('admin.catalog.category.show', ['category' => $category])
            ->with('success', __('app/controllers.admin.category.successUpdated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Category $category
     * @return RedirectResponse
     */
    public function destroy(Category $category)
    {
        if ($category->children->count()) {
            $errors[] = __('app/controllers.admin.category.errorDeletedBecauseChildren');
        }
        if ($category->products->count()) {
            $errors[] = __('app/controllers.admin.category.errorDeletedBecauseProducts');
        }
        if (!empty($errors)) {
            return back()->withErrors($errors);
        }
        $this->imageHandler->remove($category);
        $category->delete();
        return redirect()
            ->route('admin.catalog.category.index')
            ->with('success', __('app/controllers.admin.category.successDeleted'));
    }
}
