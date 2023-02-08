<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Todo;
use Faker\Factory as Faker;

class TodosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        
        for ($i = 0; $i < 100;$i++){
        $todo = new Todo;
        $todo->name = $faker->name;
        $todo->description = $faker->paragraph(5);
        $todo->completed = false;
        $todo->save();
        }
        
    }
}
