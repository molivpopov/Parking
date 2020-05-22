<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Classes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::unprepared(/** @lang text */"
            INSERT INTO vclasses(name, places) VALUES
            ('Лек автомобил/мотор', 1),
            ('Бус', 2),
            ('Автобус/камион', 4);
        ");
    }
}
