<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Ford',
             ]);
             Category::create([
                'name' => 'Opel',
                 ]);
                 Category::create([
                    'name' => 'Toyota',
                     ]);
                     Category::create([
                        'name' => 'Audi',
                         ]);
                         Category::create([
                            'name' => 'BMW',
                             ]);
            Category::create([
                'name' => 'Chevrolet',
                    ]);
                    Category::create([
                    'name' => 'Datsun',
                        ]);
                        Category::create([
                        'name' => 'Ferrari',
                            ]);
                            Category::create([
                            'name' => 'Honda',
                                ]);
                                Category::create([
                                'name' => 'Mercedes',
                                    ]);
            Category::create([
                'name' => 'Nissan',
                    ]);
                    Category::create([
                    'name' => 'Porsche',
                        ]);
                        
    
    }
}