<?php

namespace Modules\Doctor\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Doctor\Models\Doctor;

class DoctorDatabaseSeeder extends Seeder
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
         * Doctors Seed
         * ------------------
         */

        // DB::table('doctors')->truncate();
        // echo "Truncate: doctors \n";

        Doctor::factory()->count(20)->create();
        $rows = Doctor::all();
        echo " Insert: doctors \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
