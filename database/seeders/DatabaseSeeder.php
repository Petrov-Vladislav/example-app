<?php

namespace Database\Seeders;

use App\Models\Desk;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // Desk::factory(100)->create();
        // for ($i=0; $i < 100; $i++) { 
        //     DB::table('desk_lists')->insert([
        //     'name' => Str::random(10),
        //     'desk_id' => rand(1,100),
        //     'created_at' => date('Y-m-d H:i:s'),
        //     'updated_at' => date('Y-m-d H:i:s')
        //     ]);
        // }

        // for ($i=0; $i < 100; $i++) { 
        //     DB::table('cards')->insert([
        //     'name' => Str::random(10),
        //     'desk_list_id' => rand(102,201),
        //     'created_at' => date('Y-m-d H:i:s'),
        //     'updated_at' => date('Y-m-d H:i:s')
        //     ]);
        // }

        for ($i=0; $i < 100; $i++) { 
            DB::table('tasks')->insert([
            'name' => Str::random(10),
            'card_id' => rand(3,102),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
            ]);
        }
    }
}
