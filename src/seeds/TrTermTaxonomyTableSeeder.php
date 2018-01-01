<?php

use Illuminate\Database\Seeder;

class TrTermTaxonomyTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tr_term_taxonomy')->delete();
        
        \DB::table('tr_term_taxonomy')->insert(array (
            0 => 
            array (
                'term_taxonomy_id' => 1,
                'term_id' => 1,
                'taxonomy' => 'category',
                'description' => '',
                'parent' => 0,
                'count' => 0,
            ),
            1 => 
            array (
                'term_taxonomy_id' => 2,
                'term_id' => 2,
                'taxonomy' => 'true_faqs_tax',
                'description' => '',
                'parent' => 0,
                'count' => 11,
            ),
            2 => 
            array (
                'term_taxonomy_id' => 3,
                'term_id' => 3,
                'taxonomy' => 'true_faqs_tax',
                'description' => '',
                'parent' => 0,
                'count' => 14,
            ),
            3 => 
            array (
                'term_taxonomy_id' => 4,
                'term_id' => 4,
                'taxonomy' => 'nav_menu',
                'description' => '',
                'parent' => 0,
                'count' => 2,
            ),
            4 => 
            array (
                'term_taxonomy_id' => 5,
                'term_id' => 5,
                'taxonomy' => 'nav_menu',
                'description' => '',
                'parent' => 0,
                'count' => 5,
            ),
            5 => 
            array (
                'term_taxonomy_id' => 6,
                'term_id' => 6,
                'taxonomy' => 'true_faqs_tax',
                'description' => '',
                'parent' => 0,
                'count' => 8,
            ),
        ));
        
        
    }
}