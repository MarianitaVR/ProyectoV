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
        Schema::create('users', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';

            $table->string('uuid', 36)->id()->unique()->nullable(false);
            $table->string('names', 36)->nullable(false);
            $table->string('surnames', 36)->nullable(false);
            $table->string('identification', 36)->unique()->nullable(false);
            $table->string('email', 60)->unique()->nullable(false);
            $table->string('address', 60)->nullable(false);
            $table->string('password')->nullable(false);
            $table->boolean('status')->nullable(false);
            $table->bigInteger('idRol')->unsigned()->nullable(false);
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('idRol')->references('id')->on('roles')->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
