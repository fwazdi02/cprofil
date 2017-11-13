<?php

use Illuminate\Database\Seeder;

class DataTesting extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       for ($i=0; $i < 6; $i++) { 
       	DB::table('categories')->insert(
       		[
       		'user_id'=>1, 'category_name'=>('category'.$i), 'slug_category'=>str_slug('category-'.$i,'-'), 'order_category'=>($i+1), 'category_description'=>'lorem ipsum dolor sit amet, laka jadi kaya gitu'
       		]);
       }
    }
}
