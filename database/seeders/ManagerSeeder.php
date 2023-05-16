<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ManagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Manager\Manager::factory(5)->create();

                \App\Models\Manager\Manager::factory()->create([
                    'name' => 'Test manager',
                    'username'=>'manager',
                    'email' => 'manager@manager.com',
                ]);
    }
}
