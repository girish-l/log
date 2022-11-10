<?php

namespace Girishl\Log\Commands;

use Illuminate\Console\Command;

class LogCommand extends Command
{
    public $signature = 'log';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
