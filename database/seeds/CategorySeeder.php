<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i=0; $i < 6; $i++) { 
    		$catName = 'Категория #'.$i;
    		$categories[] = [
    			'title' => $catName,
    			'slug' => Str::slug($catName),
    		];
    	}
    DB::table('categories')->insert($categories);
    }
}
