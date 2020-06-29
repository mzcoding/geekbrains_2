<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
	protected $news = [
		[
			'id' => 1,
			'title' => 'some <strong>title</strong>',
			'text'  => 'some text <h1>Lorem ipsum</h1>'
		],
		[
			'id' => 2,
			'title' => 'Two news',
			'text'  => 'Description news'
		],
	];
    public function index()
	{
		$id = mt_rand(1,100);
		return view('news.index', ['id' => $id, 'news' => $this->news]) ;
	}
	public function create()
	{
		return view('news.create') ;
	}
	public function edit(int $id)
	{
		return view('news.edit', ['id' => $id]) ;
	}
	public function show(string $slug)
	{
		 $id = request()->has('id') ? (int)request()->get('id') : null;
		 echo $slug . "-" . $id;
	}


	public function store(Request $request)
	{
	   //save
	   return redirect()->route('news');
	}
}
