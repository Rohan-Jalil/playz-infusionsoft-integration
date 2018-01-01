<?php

use Illuminate\Database\Seeder;

class TrTermsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tr_terms')->delete();
        
        \DB::table('tr_terms')->insert(array (
            0 => 
            array (
                'term_id' => 1,
                'name' => 'Uncategorised',
                'slug' => 'uncategorised',
                'term_group' => 0,
            ),
            1 => 
            array (
                'term_id' => 2,
                'name' => 'FAQs for Parents and Kids',
                'slug' => 'faq-parents',
                'term_group' => 0,
            ),
            2 => 
            array (
                'term_id' => 3,
                'name' => 'FAQs for Kids\' Activity Providers',
                'slug' => 'faq-activityproviders',
                'term_group' => 0,
            ),
            3 => 
            array (
                'term_id' => 4,
                'name' => 'Header',
                'slug' => 'header',
                'term_group' => 0,
            ),
            4 => 
            array (
                'term_id' => 5,
                'name' => 'Footer',
                'slug' => 'footer',
                'term_group' => 0,
            ),
            5 => 
            array (
                'term_id' => 6,
                'name' => 'Fact Sheets - for Playz Workz providers',
                'slug' => 'fact-sheets',
                'term_group' => 0,
            ),
        ));
        
        
    }
}