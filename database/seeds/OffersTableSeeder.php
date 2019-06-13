<?php

use Illuminate\Database\Seeder;
use App\Models\Offer;

class OffersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Offer::class,5)->states('panel', 'house')->create();
        factory(Offer::class,5)->states('brick', 'house')->create();
        factory(Offer::class,5)->states('panel', 'flat')->create();
        factory(Offer::class,5)->states('brick', 'flat')->create();

    }
}


