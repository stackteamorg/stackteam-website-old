<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Explain;

class CreateExplain extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:explain {name} {lang} {--force}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'make new explain';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        if ($this->option('force')) {

            Explain::create([
                'name' => $this->argument('name'),
                'lang' => $this->argument('lang'),
                'title' => 'simple title for ' . $this->argument('name'),
                'content' => 'simple content for ' . $this->argument('name'),
                'quotation' => 'simple quotation text for ' . $this->argument('name'),
                'quotation_name' => 'mahdi homeyli',
                'quotation_role' => 'Co-funder and CEO',
            ]);

            $this->info('the force explain created successful!');
            return 0;
        } 


        $title = $this->ask('please enter title');
        $content = $this->ask('please enter content');
        $quotation = $this->ask('please enter quotation text');
        $quotationName = $this->ask('please enter quotation name');
        $quotationRole = $this->ask('please enter quotation role');
        

        Explain::create([
            'name' => $this->argument('name'),
            'lang' => $this->argument('lang'),
            'title' => $title,
            'content' => $content,
            'quotation' => $quotation,
            'quotation_name' => $quotationName,
            'quotation_role' => $quotationRole,
        ]);

        $this->info('the explain created successful!');

        return 0;
    }
}
