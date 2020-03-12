<?php

use Illuminate\Database\Seeder;
use App\Header;

class HeadersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Header::create([
            'title'        =>   'DON`T MISS OUT!',
            'description'      =>   '20% OFF EVERYTHING, YEP EVEN SALE!',
            'image'  =>   'headers/WZ9xF5MDleu1OC2Mx0W0ZFm5T4OXsReL2vuhWJxd.jpeg'
             ]);
        Header::create([
            'title'        =>   'SHOP-MINDCOM',
            'description'      =>   'SALE UP TO 50% OFF',
            'image'  =>   'headers/pGjO4WCOgd4RqnFf7go7IVLX5igcMufngvvcAiUX.jpeg'
                ]);
        Header::create([
            'title'        =>   'SPRING SUMMER 2020',
            'description'      =>   'THE CAPSULE COLLECTION EVERYONE IS TALKING ABOUT',
            'image'  =>   'headers/JOYyqNydELhJdtCdixR8DvVYmS5cXZDcFwTdBVSK.jpeg'
                ]);
    }
}


