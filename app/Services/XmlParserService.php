<?php

namespace App\Services;

use Orchestra\Parser\Xml\Facade as XmlParser;

class XmlParserService
{
   public function parse(string $link): array
   {
	   $xml = XmlParser::load($link);  //'https://www.cbsnews.com/latest/rss/world'
	   $parse = $xml->parse([
		   'news' => [
			   'uses' => 'channel.item[title,link,description,pubDate]'
		   ]
	   ]);

	   return $parse;
   }
   public function saveNews(string $link)
   {
   	   $e = explode("/", $link);
   	   $title = end($e);
   	   $news = $this->parse($link);
   	   $newsJson = json_encode($news);
	   \Storage::disk('public')->put($title . '.txt', $newsJson);
   }
}