<?php

namespace Apsg\Dafetcher\Commands;

use Illuminate\Console\Command;

class DafetcherCommand extends Command
{
    public $signature = 'da-gallery-fetcher';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
