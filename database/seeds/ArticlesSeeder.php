<?php
use\App\Article;
use Illuminate\Database\Seeder;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i<100; $i++){
            Article::Create([
                'titulo'=> 'Viajes gratis China'.$i,
                'cuerpo'=> 'Bla bla frasre profunda blah blah blah...',
                'autor'=> 'Por Susanita Fuuuuu'
            ]);
        }
    }
}
