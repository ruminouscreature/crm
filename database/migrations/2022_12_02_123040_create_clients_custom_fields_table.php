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
        Schema::create('clients_custom_fields', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id');
            $table->foreignId('field_type_id');
            $table->string('name');
            $table->string('value')->nullable();    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients_custom_fields');
    }
};