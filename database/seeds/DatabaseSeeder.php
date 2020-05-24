<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // insert basic class vehicle
        DB::unprepared(/** @lang text */"
            INSERT INTO vclasses(name, places) VALUES
            ('cars or motorcycles', 1),
            ('bus', 2),
            ('auto bus or truck', 4);
        ");

        // insert different basic discounts
        DB::unprepared(/** @lang text */"
            INSERT INTO discounts(name, percent) VALUES
            ('Silver (10%)', 0.1),
            ('Gold (15%)', 0.15),
            ('Platinum (20%)', 0.2);
        ");

        // insert basic taxes, based on vehicle classes
        // duration use seconds
        // 36000 - seconds is 8 hours
        // 50400 - seconds is 14 hours
        DB::unprepared(/** @lang text */"
            INSERT INTO taxes(name, tax, `from`, duration, vclass_id) VALUES
            ('Daily rate cars or motorcycles', 3, '8:00:00', 36000, 1),
            ('Night rate cars or motorcycles', 2, '18:00:00', 50400, 1),
            ('Daily rate bus', 6, '8:00:00', 36000, 2),
            ('Night rate bus', 4, '18:00:00', 50400, 2),
            ('Daily rate auto bus or truck', 12, '8:00:00', 36000, 3),
            ('Night rate auto bus or truck', 8, '18:00:00', 50400, 3);
        ");
    }
}
