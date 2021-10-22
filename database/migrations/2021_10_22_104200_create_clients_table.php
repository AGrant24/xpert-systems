<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('client_name', 100);
            $table->date('date_of_birth')->nullable();
            $table->text('address', 100)->nullable();
            $table->string('post_code', 50)->nullable();
            $table->string('email', 70)->nullable();
            $table->integer('contact_number')->nullable();
            $table->string('status')->nullable()->default('New');
            $table->string('risk_status')->nullable()->default('None');
            $table->string('service')->nullable()->default('Consultation');
            $table->boolean('invoiced')->nullable()->default(0);
            $table->SoftDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
