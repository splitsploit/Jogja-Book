<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Category::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            'action',
            'horror',
            'comedy',
            'romance',
            'programming',
            'management',
            'hacking'
        ];

        foreach ($data as $key => $value)
        {
            Category::insert([
                'name' => $value
            ]);
        }
    }
}
