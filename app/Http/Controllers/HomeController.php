<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }



	public function index()
	{
		$news = News::orderBy('updated_at', 'desc')->paginate(5);

		return view('news.index', ['news' => $news, 'categories' => $this->getCategories()]) ;
	}
}
