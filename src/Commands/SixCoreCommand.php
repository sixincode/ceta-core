<?php

namespace Sixincode\SixCore\Commands;

use Illuminate\Console\Command;

class SixCoreCommand extends Command
{
    public $signature = 'six-core';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
