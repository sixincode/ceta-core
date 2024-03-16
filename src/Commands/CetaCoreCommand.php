<?php

namespace Sixincode\CetaCore\Commands;

use Illuminate\Console\Command;

class CetaCoreCommand extends Command
{
    public $signature = 'ceta-core';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
