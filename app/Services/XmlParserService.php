<?php

namespace App\Services;

use Orchestra\Parser\Xml\Facade as XmlParser;

class XmlParserService
{
   public function parse(): array
   {
	   $xml = XmlParser::load('https://www.cbsnews.com/latest/rss/world');
	   $parse = $xml->parse([
		   'news' => [
			   'uses' => 'channel.item[title,link,description,pubDate]'
		   ]
	   ]);

	   return $parse;
   }
}