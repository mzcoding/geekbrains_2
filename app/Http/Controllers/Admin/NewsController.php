<?php

namespace App\Http\Controllers\Admin;

use App\Events\NewsEditedEvent;
use App\Http\Controllers\Controller;
use App\Http\Requests\NewsCreateRequest;
use App\Http\Requests\NewsUpdateRequest;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {

        $news = News::all();

        return view('news.admin', ['news' => $news]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
		return view('news.create', ['categories' => $this->getCategories()]) ;
    }

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param NewsCreateRequest $request
	 * @return \Illuminate\Http\Response
	 */
    public function store(NewsCreateRequest $request)
    {
		$news = News::create($request->validated());
		if($news) {
			return redirect()->route('news');
		}

		return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(News $news)
    {
		return view('news.edit', ['news' => $news, 'categories' => $this->getCategories()]) ;
	}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\NewsUpdateRequest  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(NewsUpdateRequest $request, News $news)
    {

			$news->title = $request->input('title');
			$news->text = $request->input('text');
			if ($news->save()) {
				event(new NewsEditedEvent($news));

				return redirect('/');
			}

			return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        //
    }
}
