<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Models\SocialContact;

class CreateSocial extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:social';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'make social and contact data';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $name = $this->ask('enter the social or contact name');

        if (SocialContact::create([
            'name' => $name,
            'type' => $this->ask('enter type of data',$name),
            'data' => $this->ask('enter the social or contact data'),
            'link' => $this->ask('enter the social or contact link'),
            'display' => $this->confirm('do you wont display this data on social list ?',false)
        ])) {

            $this->info('social or contact data created successful!');
            return 0;
        }

        $this->info('some error!');
        return 0;
    }
}
