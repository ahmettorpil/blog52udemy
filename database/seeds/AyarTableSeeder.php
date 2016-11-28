<?php

use App\Ayar;
use Illuminate\Database\Seeder;

class AyarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ayar::create(['name' => 'baslik', 'value' => 'Yazılım Dünyası']);
        Ayar::create(['name' => 'author', 'value' => 'Ahmet TORPİL']);
        Ayar::create(['name' => 'aciklama', 'value' => 'Az kod Çok iş..']);
        Ayar::create(['name' => 'keywords', 'value' => 'yazlılım, php, java']);
        Ayar::create(['name' => 'facebook', 'value' => 'https://www.facebook.com/ahmet.torpil.3']);
        Ayar::create(['name' => 'twitter', 'value' => 'https://www.twitter.com/torpilahmet']);
        Ayar::create(['name' => 'github', 'value' => 'https://www.github.com/torpilahmet']);
    }
}
