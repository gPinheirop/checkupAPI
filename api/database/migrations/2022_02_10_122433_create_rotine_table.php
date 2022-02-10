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
        Schema::create('rotine', function (Blueprint $table) {
            $table->id();
            $table->boolean('API CLIENT')->nullable();
            $table->boolean('SGBD');
            $table->boolean('ATS APP');
            $table->boolean('ONEDRIVE');
            $table->boolean('BKUP30m');
            $table->boolean('RIMP')->nullable();
            $table->boolean('ENV EMAIL')->nullable();
            $table->boolean('ENV NFE')->nullable();
            $table->boolean('API SERVER')->nullable();
            $table->text('OBS')->nullable();
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
        Schema::dropIfExists('rotine');
    }
};
