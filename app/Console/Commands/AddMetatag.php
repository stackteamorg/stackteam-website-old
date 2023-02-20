<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Models\Metatag;
use App\Models\Service;
use App\Models\Faq;

class AddMetatag extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */

    protected $name = null;
    protected $content = null;
    protected $property = null;
    protected $lang = null;
    protected $section = null;
    protected $sectionId = null;

    protected $og = [
        'locale',
        'type',
        'title',
        'description',
        'url',
        'site_name',
        'updated_time',
        'image',
        'image:secure_url',
        'image:width',
        'image:height',
        'image:alt', 
        'image:type', 
        'see_also'
    ];

    protected $twitter = [
        'card',
        'title',
        'description',
        'site',
        'domain',
        'url',
        'creator',
        'image',
    ];

    protected $contentableMetatags = ['keywords','description','og','twitter'];
    protected $signature = 'make:metatag {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'make metatags';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->lang = $this->choice('enter the lang of this metatag',['all','en','ar','fa','fr','ru'],'all');
        

        $this->name = $this->argument('name');

        if (in_array($this->name,['og','twitter'])) {
            $this->name = null;

            $property = null;
            if ($this->argument('name') == 'og') {
                $property = $this->choice('choice OpenGraph metatags',$this->og,null);
            }


            if ($this->argument('name') == 'twitter') {
                $property = $this->choice('choice Twitter metatags',$this->twitter,null);
            }

            $this->property = $this->argument('name') . ':' . $property;

        }


        // get section 
        $this->section = $this->choice('select the section for this metatag',[
            'public',
            'faq',
            'index',
            'brief',
            'about',
            'service',
            'contact',
            'tem',
            'collaborative-process',
        ],'public');

        if ($this->section == 'public') {
            $this->section = $this->ask('enter the public section name :','public');
        } 

        if ($this->section == 'service') {
            $this->sectionId = $this->getServiceSectionId();

            if ($this->sectionId != null) {
                $this->section = $this->section . '.detail';
            }
        }

        if ($this->section == 'faq') {
            $this->sectionId = $this->getFaqSectionId();
        }

        // get data
        if (!in_array($this->argument('name'),$this->contentableMetatags)) {
            $this->property = $this->ask('enter the property of metatag',null);
        }

        
        $this->content = $this->ask('enter the content of metatag',null);


        // create in database
        if (Metatag::create([
            'name' => $this->name,
            'content' => $this->content,
            'property' => $this->property,
            'lang' => $this->lang,
            'section' => $this->section,
            'section_id' => $this->sectionId

        ])) {

            $this->info('social or contact data created successful!');
            return 0;
        }

        $this->info('some error!');
        return 0;
    }

    protected function getFaqSectionId () {
        
        $faqs = Faq::where('lang',$this->lang)
            ->select(['name','id'])
            ->get();

        $faqItems = [];
        foreach ($faqs as $faq) {
            $faqItems[$faq->name] = $faq->id;
        }

        $choiceFaqName = $this->choice('choice faq :',array_keys($faqItems));

        return $faqItems[$choiceFaqName];

    }

    protected function getServiceSectionId () {
        
        $services = Service::where('lang', $this->lang)
            ->select(['id','name'])
            ->get();

        $serviceItems = ['primery' => 0];
        foreach ($services as $service) {
            $serviceItems[$service->name] = $service->id;
        }

        $choiceServiceName = $this->choice('choice service?',array_keys($serviceItems));
        
        if ($choiceServiceName == 'primery') {
            return null;
        }

        return $serviceItems[$choiceServiceName];

    }
}
