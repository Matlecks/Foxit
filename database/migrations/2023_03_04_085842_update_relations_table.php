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
        Schema::table('projects', function (Blueprint $table) {
            $table->foreignId('users_id')->constrained('users');
            $table->foreignId('reviews_id')->constrained('reviews');
        });

        Schema::table('services', function (Blueprint $table) {
            $table->foreignId('users_id')->constrained('users');
        });

        Schema::table('orders', function (Blueprint $table) {
            $table->foreignId('services_id')->constrained('services');
        });

        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('projects_id')->constrained('projects');
            $table->foreignId('services_id')->constrained('services');
            $table->foreignId('reviews_id')->constrained('reviews');
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
