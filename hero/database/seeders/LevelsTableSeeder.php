<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0'); //Reinicia a 0 las llaves CMD php artisan db:seed
        DB::table('levels')->truncate();//Elimina registros
        $xp = 100;

        for ($i = 0; $i < 10; $i++) {

            $xp = $xp * 2;
            DB::table('levels')->insert([
                'xp' => $xp
            ]);

        }
    }
}
