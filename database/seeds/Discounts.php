<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Discounts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::unprepared(/** @lang text */"
            INSERT INTO discounts(name, percent) VALUES
            ('Silver', 0.90),
            ('Gold', 0.85),
            ('Platinum', 0.80);
        ");
    }
}
