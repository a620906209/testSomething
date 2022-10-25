<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Database\Eloquent\Model;
use App\Models\Items;

class itemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Items::truncate();
        Items::unguard();
        Items::factory()->count(10)->create();
        Items::reguard();
    }
}
