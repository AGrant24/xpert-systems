<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            /**
             * $table->timestamps();
             * $table->integer('appointment_id');
             * $table->string('status')->nullable()->default('Booked');
             * $table->date('appointment_date');
             * $table->time('appointment_time');
             * $table->integer('duration')->nullable();
             * $table->longText('notes')->nullable(); Rename to comments?
             * $table->boolean('invoiced')->nullable();
             * $table->unsignedInteger('client_id')->unasigned()->nullable();
             * $table->foreign('client_id')->references('id')->on('clients')->onDelete('SET NULL');
             */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointments');
        // Schema::table('appointments', function (Blueprint $table) {
        //     $table->dropForeign(['client_id']);
        //     $table->dropColumn('client_id');
        // });
    }
}
