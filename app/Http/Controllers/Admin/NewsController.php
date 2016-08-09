<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateNewsItemRequest;
use App\Models\NewsItem;
use App\Models\NewsCategory;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $news = NewsItem::filter($request->input('filter'));

        if ($request->has('search')) {
            $news = $news->search($request->input('search'));
        }

        $news = $news->sort($request->input('sort'));
        $news = $news->simplePaginate($request->input('per_page') ?? 15);

        return view('admin.news.index', compact('news'))
            ->with('active',   NewsItem::count())
            ->with('pending',  NewsItem::onlyPending()->count())
            ->with('inactive', NewsItem::onlyRevoked()->count())
            ->with('deleted',  NewsItem::onlyTrashed()->count())
        ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $news = new NewsItem;
        $news->published_since = Carbon::now();
        $news->comments_allowed = true;

        $categories = NewsCategory::all();

        return view('admin.news.create', compact('news', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateNewsItemRequest $request)
    {
        dd($request->all());

        // add author id before create...

        if (NewsItem::create($request->all())->wasRecentlyCreated) {
            return back()->with('notice', 'News was successfully created.');
        }

        return back()->with('alert', 'Error occurred. News was not created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd(12);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $news_id)
    {
        // The news may be in two states at the same time.
        $news = NewsItem::withoutGlobalScope(NewsItem::getScopeObject())
            ->withTrashed()
            ->findOrFail($news_id)
        ;

        if ($news->forceDelete()) {
            return redirect()
                ->route('admin.news.index', ['filter' => 'deleted'])
                ->with('notice', 'The news is being deleted.')
            ;
        }

        return back()->with('alert', 'Error occurred. News was not deleted.');
    }

    /**
     * Mark up as deleted.
     *
     * @param  NewsItem $news
     * @return \Illuminate\Http\Response
     */
    public function delete(NewsItem $news)
    {
        if ($news->delete()) {
            return back()->with('notice', 'The news is being deleted.');
        }

        return back()->with('alert', 'Error occurred. News was not deleted.');
    }

    /**
     * Rstore soft deleted news.
     *
     * @param  int  $news_id
     * @return \Illuminate\Http\Response
     */
    public function restore(int $news_id)
    {
        $news = NewsItem::withTrashed()->findOrFail($news_id);

        if ($news->trashed()) {
            $news->restore();

            return back()->with('notice', 'The news restored.');
        }

        return back()->with('alert', 'Error occurred. News was not restored.');
    }

    /**
     * Activate news.
     *
     * @param  int  $news_id
     * @return \Illuminate\Http\Response
     */
    public function publish(int $news_id)
    {
        // The news may be in two states at the same time.
        $news = NewsItem::withoutGlobalScope(NewsItem::getScopeObject())
            ->findOrFail($news_id);

        if ($news->publish()) {
            return back()->with('notice', 'The news item is being published.');
        }

        return back()->with('alert', 'Error occurred. News item was not published.');
    }

    /**
     * Revoke news.
     *
     * @param  int  $news_id
     * @return \Illuminate\Http\Response
     */
    public function revoke(int $news_id)
    {
        $news = NewsItem::withPending()->findOrFail($news_id);

        if ($news->revoke()) {
            return back()->with('notice', 'The news item is revoked.');
        }

        return back()->with('alert', 'Error occurred.  News was not revoked.');
    }
}
