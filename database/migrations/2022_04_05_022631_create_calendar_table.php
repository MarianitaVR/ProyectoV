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
        Schema::create('calendar', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';

            $table->string('id', 36)->id()->unique()->nullable(false);
            $table->string('uuidClient', 36)->nullable(false);
            $table->string('uuidCreator', 36)->nullable(false);
            $table->string('uuidResponsible', 36)->nullable(false);
            $table->date('start')->nullable(false);
            $table->time('time')->nullable(false);
            $table->string('title')->nullable(false);
            $table->timestamps();

            $table->foreign('uuidClient')->references('uuid')->on('clients')->onUpdate('cascade')
                ->onDelete('restrict');
            $table->foreign('uuidCreator')->references('uuid')->on('users')->onUpdate('cascade')
                ->onDelete('restrict');
            $table->foreign('uuidResponsible')->references('uuid')->on('users')->onUpdate('cascade')
                ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calendar');
    }
};
