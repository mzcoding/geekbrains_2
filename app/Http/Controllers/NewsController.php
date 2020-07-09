<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsCreateRequest;
use App\Models\News;
use Illuminate\Http\Request;
use Modules\Module;

class NewsController extends Controller
{
	/**
	 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function create()
	{
		return view('news.create', ['categories' => $this->getCategories()]) ;
	}

	/**
	 * @param News $news
	 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function edit(News $news)
	{
		return view('news.edit', ['news' => $news, 'categories' => $this->getCategories()]) ;
	}

	/**
	 * @param Request $request
	 * @param int $id
	 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|void
	 */
	public function update(Request $request, int $id)
	{
        $news = News::find($id);
        if(!$news) {
        	 return abort(404);
		}

        $news->title = $request->input('title');
        $news->text  = $request->input('text');
        if($news->save()) {
        	return redirect('/');
		}

        return back();
	}
	public function show(string $slug)
	{
		 $id = request()->has('id') ? (int)request()->get('id') : null;
		 echo $slug . "-" . $id;
	}


	/**
	 * @param NewsCreateRequest $request
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function store(NewsCreateRequest $request)
	{
		$news = News::create($request->validated());
		if($news) {
			return redirect()->route('news');
		}

		return back();
	}
}
