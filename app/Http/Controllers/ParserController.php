<?php

namespace App\Http\Controllers;

use App\Services\XmlParserService;
use Illuminate\Http\Request;

class ParserController extends Controller
{
    public function __invoke()
	{
		 $objService = new XmlParserService();
		 $news = $objService->parse();
	}
}
