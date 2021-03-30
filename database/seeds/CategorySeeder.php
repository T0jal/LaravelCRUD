<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['category_name'=>'Bedroom', 'created_at' => now(), 'updated_at' => now()],
            ['category_name'=>'Living Room', 'created_at' => now(), 'updated_at' => now()],
            ['category_name'=>'Kitchen', 'created_at' => now(), 'updated_at' => now()],
            ['category_name'=>'Bathroom', 'created_at' => now(), 'updated_at' => now()],
        ];

        \DB::table('categories')->insert($data);
    }
}
