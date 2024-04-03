<?php

namespace AdminKit\Reviews\Commands;

use Illuminate\Console\Command;

class ReviewsCommand extends Command
{
    public $signature = 'admin-kit-reviews';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
