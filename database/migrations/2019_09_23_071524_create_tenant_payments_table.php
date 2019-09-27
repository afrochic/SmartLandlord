<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTenantPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenantPayments', function (Blueprint $table) {
            $table->integer('tenantId');
            $table->integer('apartmentId');
            $table->foreign('tenantId')
                    ->references('id')
                    ->on('tenants')
                    ->onDelete('cascade');
            $table->foreign('apartmentId')
                    ->references('id')
                    ->on('apartments')
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
        Schema::dropIfExists('tenantPayments');
    }
}
