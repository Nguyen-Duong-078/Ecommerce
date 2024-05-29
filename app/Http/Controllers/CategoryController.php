<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{
    const PATN_VIEW = 'Categories.';
    public function index()
    {
        $data = Category::query()->latest('id')->paginate(5);
        // dd($data->toArray());
        return view(self::PATN_VIEW . __FUNCTION__, compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(self::PATN_VIEW . __FUNCTION__);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        Category::query()->create($request->all());

        return redirect()
            ->route('categories.index')
            ->with('success', 'Thành Công');
    }

    public function show(Category $category)
    {
        return view(self::PATN_VIEW . __FUNCTION__, compact('category'));
    }

    public function edit(Category $category)
    {
        return view(self::PATN_VIEW . __FUNCTION__, compact('category'));
    }

    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $category->update($request->all());
        return back()->with('success', 'Thành Công');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return back()->with('success', 'Thành Công');
    }
}
