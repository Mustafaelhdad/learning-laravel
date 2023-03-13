<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class expiration extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:expire';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = "Automation expire users' every 5 minutes";

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        //
    }
}
