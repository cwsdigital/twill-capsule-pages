<?php

namespace App\Twill\Capsules\Pages\Database\Seeds;

use App\Twill\Capsules\Pages\Models\Page;
use App\Twill\Capsules\Templates\Models\Template;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(YourSeeder::class);
        $genericTemplate = Template::firstOrCreate([
            'uid' => 'generic',
            'title' => 'standard',
        ]);

        $samplePage = Page::firstOrCreate([
            'title' => 'Sample Page',
            'published' => 1
        ]);
        $samplePage->template()->associate($genericTemplate);
        $samplePage->save();
        //$samplePage->metadata()->create();

        $contactTemplate = Template::firstOrCreate([
            'uid' => 'contact',
            'title' => 'Contact',
            'admin_only' => 1,
            'show_content_editor' => 0
        ]);

        $contactPage = Page::firstOrCreate([
            'title' => 'Contact',
            'published' => 1
        ]);
        $contactPage->template()->associate($contactTemplate);
        $contactPage->save();
        //$contactPage->metadata()->create();

        $privacyPage = Page::firstOrCreate([
            'title' => 'Privacy Policy',
            'published' => 1
        ]);
        $privacyPage->template()->associate($genericTemplate);
        $privacyPage->save();
        $privacyPage->metadata()->create();
    }
}
