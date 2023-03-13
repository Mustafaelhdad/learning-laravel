<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class notify extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notify:email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'send notification to users to reminde them for the course time';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        //
        // $user = app/User::select('email')->get();
        // OR
        // $emails = app/User::pluck('email')->toArray(); 

        foreach($emails as $email) {
            // sending emails with Laravel
            $data  = ['title' => 'programming', 'body' => 'php'];
            Mail::To($email) -> send(new NotifyEmail($data));
        }
    }
}
