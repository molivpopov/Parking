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
            ('Лек автомобил/мотор', 1),
            ('Бус', 2),
            ('Автобус/камион', 4);
        ");

        // insert different basic discounts
        DB::unprepared(/** @lang text */"
            INSERT INTO discounts(name, percent) VALUES
            ('Silver', 0.90),
            ('Gold', 0.85),
            ('Platinum', 0.80);
        ");

        // insert basic taxes, based on vehicle classes
        // duration use seconds
        // 43200 - seconds is 12 hours
        DB::unprepared(/** @lang text */"
            INSERT INTO taxes(name, tax, `from`, duration, class) VALUES
            ('Дневна тарифа коли/мотори', 3, '8:00:00', 43200, 1),
            ('Нощна тарифа коли/мотори', 2, '18:00:00', 43200, 1),
            ('Дневна тарифа бусове', 6, '8:00:00', 43200, 2),
            ('Нощна тарифа бусове', 4, '18:00:00', 43200, 2),
            ('Дневна тарифа автобус или камион', 12, '8:00:00', 43200, 3),
            ('Нощна тарифа автобус или камион', 8, '18:00:00', 43200, 3);
        ");
    }
}
