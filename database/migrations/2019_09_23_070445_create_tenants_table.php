<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTenantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('email')->unique();
            $table->string('placeOfWork');
            $table->integer('idNumber');
            $table->integer('occupants');
            $table->text('gender');
            $table->date('dateEntered');
            $table->date('dateCheckedOut')->nullable();
            $table->integer('buildingId');
            $table->foreign('buildingId')
                    ->references('id')
                    ->on('buildings')
                    ->onDelete('cascade');
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
        Schema::dropIfExists('tenants');
    }
}
