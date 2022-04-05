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
        Schema::create('clients', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';

            $table->string('uuid', 36)->id()->unique()->nullable(false);
            $table->string('names', 36)->nullable(false);
            $table->string('surnames', 36)->nullable(false);
            $table->string('identification', 36)->unique()->nullable(false);
            $table->string('phone', 12)->unique()->nullable(false);
            $table->string('address', 60)->nullable(false);
            $table->boolean('status')->nullable(false);
            $table->rememberToken();
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
};
