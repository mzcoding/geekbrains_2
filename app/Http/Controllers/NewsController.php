<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsCreateRequest;
use App\News;
use Illuminate\Http\Request;
use Modules\Module;

class NewsController extends Controller
{
	protected $news = [
		[
			'id' => 0,
			'title' => 'some <strong>title</strong>',
			'text'  => 'some text <h1>Lorem ipsum</h1>'
		],
		[
			'id' => 1,
			'title' => 'Two news',
			'text'  => 'Description news'
		],
		[
			'id' => 2,
			'title' => 'Three news',
			'text'  => 'Description news'
		],
	];

    public function index()
	{
		$news = (new News())->getAllNews();
		return view('news.index', ['news' => $news]) ;
	}
	public function create()
	{
		return view('news.create') ;
	}
	public function edit(int $id)
	{
		$news = (new News())->getFindNews($id);

		if(!$news) {
			return abort(404);
		}


		return view('news.edit', ['news' => $news]) ;
	}
	public function update(Request $request, int $id)
	{

	}
	public function show(string $slug)
	{
		 $id = request()->has('id') ? (int)request()->get('id') : null;
		 echo $slug . "-" . $id;
	}


	public function store(NewsCreateRequest $request)
	{
		$title = $request->input('title');
		$text  = $request->input('text');


		$str = "title:". $title . "- text:" . $text;
		file_put_contents(storage_path('app/public/db.txt'), $str, FILE_APPEND);
	   //save
	   return redirect()->route('news');
	}
}
