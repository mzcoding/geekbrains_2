<?php

namespace App\Http\Controllers;

use App\Jobs\NewsParsingJob;
use App\Services\XmlParserService;
use Illuminate\Http\Request;

class ParserController extends Controller
{
    public function __invoke()
	{
		$links = config('parsing.links');
		foreach($links as $link) {
			 NewsParsingJob::dispatch($link);
		}

		return back()->with('success', 'Success');
	}
}
