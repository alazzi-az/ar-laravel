<?php

namespace AlazziAz\ar-laravel\Commands;

use Illuminate\Console\Command;

class ar-laravelCommand extends Command
{
    public $signature = 'ar-laravel';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
