<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateVehicles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->string('number');
            $table->unsignedInteger('vclass_id');
            $table->unsignedInteger('discount_id')->nullable();
            $table->timestamp('created_at')->useCurrent();
        });

        DB::unprepared(/** @lang text */"
            CREATE TRIGGER udt_vehicle_uuid BEFORE INSERT on vehicles
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
        Schema::dropIfExists('vehicles');
    }
}
