<?php

namespace Modules\Testimony\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Testimony\Models\Testimony;

class TestimonyDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Disable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        /*
         * Testimonies Seed
         * ------------------
         */

        // DB::table('testimonies')->truncate();
        // echo "Truncate: testimonies \n";

        Testimony::factory()->count(20)->create();
        $rows = Testimony::all();
        echo " Insert: testimonies \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
