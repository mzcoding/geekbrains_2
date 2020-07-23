<?php

namespace App\Jobs;

use App\Services\XmlParserService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class NewsParsingJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $link;

	/**
	 * Create a new job instance.
	 *
	 * @param string $link
	 */
    public function __construct(string $link)
    {
        $this->link = $link;
    }

	/**
	 * Execute the job.
	 *
	 * @param XmlParserService $parser
	 * @return void
	 */
    public function handle(XmlParserService $parser)
    {
    	$parser->saveNews($this->link);
    }
}
