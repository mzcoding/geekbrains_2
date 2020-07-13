<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsCreateRequest;
use App\Models\News;
use Illuminate\Http\Request;
use Modules\Module;

class NewsController extends Controller
{
	public function show(string $slug)
	{
		 $id = request()->has('id') ? (int)request()->get('id') : null;
		 echo $slug . "-" . $id;
	}
}
