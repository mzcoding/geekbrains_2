<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
	public function show(string $slug)
	{
		$category = Category::where('slug', $slug)->first();
		if(!$category) {
			 return abort(404);
		}
		return view('categories.show', ['category' => $category, 'categories' => $this->getCategories()]);
	}
}

