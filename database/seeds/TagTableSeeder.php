<?php

use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tag = new \App\Tag([
        	'name' => "Tutorial"
        ]);

        $tag->save();

        $tag = new \App\Tag([
        	'name' => "Another Lession"
        ]);

        $tag->save();
    }
}
