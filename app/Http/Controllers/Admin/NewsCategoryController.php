<?php

namespace App\Http\Controllers\Admin;

use App\Models\NewsCategory;
use App\Jobs\ReleaseNewsCategory;
use App\Http\Requests\NewsCategoryCreateRequest;
use App\Http\Requests\NewsCategoryUpdateRequest;
use Illuminate\Http\Request;

class NewsCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $categories = NewsCategory::filter($request->input('filter'));

        if ($request->has('search')) {
            $categories = $categories->search($request->input('search'));
        }

        $categories = $categories->sort($request->input('sort'));
        $categories = $categories->simplePaginate($request->input('per_page') ?? 15);

        return view('admin.news.category.index', compact('categories'))
            ->with('active',  NewsCategory::count())
            ->with('deleted', NewsCategory::filter('deleted')->count())
        ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = new NewsCategory;

        return view('admin.news.category.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  NewsCategoryCreateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsCategoryCreateRequest $request)
    {
        $category = new NewsCategory($request->all());
        // When you create a category is not possible to specify a name.
        $category->name = $request->title;

        $response = back();

        if ($request->hasThumbnail()) {
            if ( ! $category->uploadThumbnail($request->getThumbnail())) {
                $response->with('warning', 'Thumbnail not uploaded!');
            }
        }

        $category->save();

        return $response->with('notice', 'Category was successfully created.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  NewsCategory  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(NewsCategory $category)
    {
        return view('admin.news.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  NewsCategoryUpdateRequest  $request
     * @param  NewsCategory               $category
     * @return \Illuminate\Http\Response
     */
    public function update(NewsCategoryUpdateRequest $request, NewsCategory $category)
    {
        $category->fill($request->except('name'));
        $category->name = $request->name;

        $response = back();

        if ($request->hasThumbnail()) {
            if ( ! $category->uploadThumbnail($request->getThumbnail())) {
                $response->with('warning', 'Thumbnail not uploaded!');
            }
        }

        $category->save();

        return $response->with('notice', 'Category was successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $category_id)
    {
        $category = NewsCategory::withTrashed()->findOrFail($category_id);

        if ($category->forceDelete()) {
            $this->dispatch(new ReleaseNewsCategory($category));

            return redirect()->route('admin.news.category.index', ['filter' => 'deleted'])
                ->with('notice', 'The category is being deleted.');
        }

        return back()->with('alert', 'Error occurred. Category was not deleted.');
    }

    public function delete(NewsCategory $category)
    {
        if ($category->delete()) {
            return back()->with('notice', 'The category is being deleted.');
        }

        return back()->with('alert', 'Error occurred. Category was not deleted.');
    }

    public function restore(int $category_id)
    {
        $category = NewsCategory::withTrashed()->findOrFail($category_id);

        if ($category->trashed() && $category->restore()) {
            return back()->with('notice', 'The category restored.');
        }

        return back()->with('alert', 'Error occurred. Category was not restored.');
    }
}
