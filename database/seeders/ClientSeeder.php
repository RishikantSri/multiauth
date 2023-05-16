<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\Client\Client::factory(5)->create();

        \App\Models\Client\Client::factory()->create([
            'name' => 'Test client',
            'username'=>'client',
            'email' => 'client@client.com',
        ]);
    }
}
