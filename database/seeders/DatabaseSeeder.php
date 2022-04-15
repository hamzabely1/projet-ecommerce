<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\article::create(
            [
                'nom' => 'kaido',
                'image'=>'https://cdn.shopify.com/s/files/1/0608/8166/6262/products/1_089ee9ba-6664-4a1b-ab61-b7b24eb883cf_800x.jpg?v=1635375520',
                'image2'=>'https://dhdzy64m58a2i.cloudfront.net/otakusquare-com/product/BANI-BP16564/0.jpg',
                'image3'=>'https://resize.cdn.otakumode.com/full/shop/product/2ee2f9d060a84315a02d7a4473f6dafd.jpg',
                'prix'=>'35',
                'description'=>'description',
        ]
    );

    }
}
