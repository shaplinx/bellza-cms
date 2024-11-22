<?php

namespace Modules\Doctor\Console\Commands;

use Illuminate\Console\Command;

class DoctorCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:DoctorCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Doctor Command description';

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
