<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateParkings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parkings', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->unsignedInteger('vehicle_id');
            $table->timestamp('entry')->useCurrent();
            $table->timestamp('exit')->nullable();
        });

        DB::unprepared(/** @lang text */"
            CREATE TRIGGER udt_parking_uuid BEFORE INSERT on parkings
            FOR EACH ROW
            BEGIN
            	SET NEW.uuid := uuid();
            END
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parkings');
    }
}
