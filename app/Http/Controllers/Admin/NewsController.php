<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\NewsItem;
use App\Models\NewsCategory;
use App\Jobs\ReleaseNewsItem;
use App\Http\Requests\NewsItemCreateRequest;
use App\Http\Requests\NewsItemUpdateRequest;
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
            ->with('active',   NewsItem::filter('default')->count())
            ->with('pending',  NewsItem::filter('pending')->count())
            ->with('deleted',  NewsItem::filter('deleted')->count())
            ->with('inactive', NewsItem::filter('inactive')->count())
        ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $news = new NewsItem([
            'published_since' => Carbon::now()
        ]);
        $categories = NewsCategory::all();

        return view('admin.news.create', compact('news', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  NewsItemCreateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsItemCreateRequest $request)
    {
        $news = new NewsItem($request->all());
        // When you create a news is not possible to specify a name.
        $news->name = $request->title;
        $news->published = $request->has('published');
        $news->comments_allowed = $request->has('comments_allowed');
        $news->author()->associate(auth()->user());
        $news->category()->associate(NewsCategory::find($request->category));

        $response = back();

        if ($request->hasThumbnail()) {
            if ( ! $news->uploadThumbnail($request->getThumbnail())) {
                $response->with('warning', 'Thumbnail not uploaded!');
            }
        }

        $news->save();

        return $response->with('notice', 'News was successfully created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  NewsItem  $news
     * @return \Illuminate\Http\Response
     */
    public function show(NewsItem $news)
    {
        // redirect to to news page!
        return 'Not implemented';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  NewsItem  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(NewsItem $news)
    {
        $categories = NewsCategory::all();

        return view('admin.news.edit', compact('news', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  NewsItemUpdateRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NewsItemUpdateRequest $request, NewsItem $news)
    {
        $news->fill($request->all());
        $news->name = $request->name;
        $news->published = $request->has('published');
        $news->comments_allowed = $request->has('comments_allowed');
        $news->category()->associate(NewsCategory::find($request->category));
        $response = back();

        if ($request->hasThumbnail()) {
            if ( ! $news->uploadThumbnail($request->getThumbnail())) {
                $response->with('warning', 'Thumbnail not uploaded!');
            }
        }

        $news->save();

        return $response->with('notice', 'News was successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $news_id)
    {
        $news = NewsItem::withTrashed()->findOrFail($news_id);

        if ($news->forceDelete()) {
            $this->dispatch(new ReleaseNewsItem($news));

            return redirect()->route('admin.news.index', ['filter' => 'deleted'])
                ->with('notice', 'The news is being deleted.');
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

        if ($news->trashed() && $news->restore()) {
            return back()->with('notice', 'The news restored.');
        }

        return back()->with('alert', 'Error occurred. News was not restored.');
    }

    /**
     * Activate news.
     *
     * @param  NewsItem  $news_id
     * @return \Illuminate\Http\Response
     */
    public function up(NewsItem $news)
    {
        if ($news->isNotPublished() && $news->publish()) {
            return back()->with('notice', 'The news item is being published.');
        }

        return back()->with('alert', 'Error occurred. News item was not published.');
    }

    /**
     * Revoke news.
     *
     * @param  NewsItem  $news
     * @return \Illuminate\Http\Response
     */
    public function down(NewsItem $news)
    {
        if ($news->isPublished() && $news->revoke()) {
            return back()->with('notice', 'The news item is revoked.');
        }

        return back()->with('alert', 'Error occurred.  News was not revoked.');
    }
}
