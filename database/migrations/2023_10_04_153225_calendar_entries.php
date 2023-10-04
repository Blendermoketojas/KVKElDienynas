<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calendar_entries', function (Blueprint $table) {
            $table->id(); 
            $table->integer('user_id');
            $table->dateTime('date_from');
            $table->dateTime('date_to');
            $table->timestamps();
            $table->string('event');
            $table->string('event_place');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
