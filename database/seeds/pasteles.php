<?php

use Illuminate\Database\Seeder;

class pasteles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i<10; $i++){
            Article::Create([
               
                
            ]);
        }
    }
}
