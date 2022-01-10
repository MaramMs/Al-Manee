<?php

namespace Database\Seeders;

use App\Models\About;
use App\Models\Contact;
use App\Models\Example;
use App\Models\Service;
// use Database\Factories\ServicesFactory;
use Illuminate\Database\Seeder;
use Database\Factories\ServicesFactory;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // Service::factory(5)->create();
        $service = new Service();
        $service->create([
            'brief' => 'this is a brief column in the table',
            'title' => 'this is a title column in the table',
            'content' => 'this is a content column in the table',
            'features' => 'this is a features column in the table',
        ]);

        $about = new  About();
        $arr =["En"=>"alamee" , "ar"=>"عالمي " ];
        $about->create([
            'content' => 'this is a content column in the table',
            'massage' => 'this is a massage column in the table',
            'feature' => 'this is a feature column in the table',

            'name' => json_encode($arr),
        ]);

        $example= new  Example();
        $example->create([
            'content' => 'this is a content column in the table',
            'src' => 'this is a src column in the table',
            'service_id'=>1,

        ]);
        $contact= new  Contact();
        $contact->create([
            'name' => 'this is a name column in the table',
            'icon' => 'this is a icon column in the table',
            'link' => 'this is a link column in the table',
        ]);
    }
}
