<?php

namespace VendorName\Skeleton\Commands;

use Illuminate\Console\Command;

class AppMergeCommand extends Command
{
    public $signature = 'app:merge';

    public $description = 'Merge all the relevant code from your Laravel app into a single app.md file with comments';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
