<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Feedback;

class CreateFeedback extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:feedback {lang}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'create feedback cammand';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        if (Feedback::create([
            'brand' => $this->ask('enter brand name'),
            'fullname' => $this->ask('enter fullname CEO of brand'),
            'comment' => $this->ask('enter the comment'),
            'lang' => $this->argument('lang')
        ])) {

            $this->info('feedback created successful!');
            return 0;
        }

        $this->error('feedback created error!');
        
    }
}
