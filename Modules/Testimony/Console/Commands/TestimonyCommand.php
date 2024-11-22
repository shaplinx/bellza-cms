<?php

namespace Modules\Testimony\Console\Commands;

use Illuminate\Console\Command;

class TestimonyCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:TestimonyCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Testimony Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        return Command::SUCCESS;
    }
}
