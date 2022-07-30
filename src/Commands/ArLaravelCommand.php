<?php

namespace AlazziAz\ArLaravel\Commands;

use Illuminate\Console\Command;

class ArLaravelCommand extends Command
{
    public $signature = 'ArLaravel';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
