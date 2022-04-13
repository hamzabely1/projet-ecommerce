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
                'image'=>'https://i.ebayimg.com/images/g/IO4AAOSw-R9fmuuJ/s-l400.jpg',
                'prix'=>'40',
                'description'=>'description',
        ]
    );

    }
}
