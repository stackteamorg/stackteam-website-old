<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Models\ServiceGoal;
use App\Models\Service;

class AddGoal extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'add:goal {lang}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'add goal for service';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $services = Service::where('lang', $this->argument('lang'))
            ->select(['id','name'])
            ->get();

        $serviceItems = [];
        foreach ($services as $service) {
            $serviceItems[$service->name] = $service->id;
        }


        $choiceServiceName = $this->choice('What is your name?',array_keys($serviceItems));
        
        $this->info ("you are select " . $choiceServiceName . 'service for ' .  $this->argument('lang') . 'language');
        
        if (ServiceGoal::create([
            'service_id' => $serviceItems[$choiceServiceName],
            'text' => $this->ask('enter goal for this service'),
            'lang' => $this->argument('lang')
        ])) {

            $this->info('the goal added successful!');
            return 0;
        } 
        
        $this->error('some error');
        return 0;
    }
}
