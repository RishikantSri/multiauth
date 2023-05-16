<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Admin\Admin::factory(5)->create();

        \App\Models\Admin\Admin::factory()->create([
            'name' => 'Test Admin',
            'username'=>'admin',
            'email' => 'admin@admin.com',
        ]);
    }
}
