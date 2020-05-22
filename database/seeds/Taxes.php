<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Taxes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::unprepared(/** @lang text */"
            INSERT INTO taxes(name, tax, `from`, class) VALUES
            ('Дневна тарифа коли/мотори', 3, '8:00:00', 1),
            ('Нощна тарифа коли/мотори', 2, '18:00:00', 1),
            ('Дневна тарифа бусове', 6, '8:00:00', 2),
            ('Нощна тарифа бусове', 4, '18:00:00', 2),
            ('Дневна тарифа автобус или камион', 12, '8:00:00', 3),
            ('Нощна тарифа автобус или камион', 8, '18:00:00', 3);
        ");
    }
}
