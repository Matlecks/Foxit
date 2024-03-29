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
            $table->foreignId('reviews_id')->nullable()->constrained('reviews');
        });

        Schema::table('services', function (Blueprint $table) {
            $table->foreignId('users_id')->nullable()->constrained('users');
            $table->foreignId('reviews_id')->nullable()->constrained('reviews');
            $table->foreignId('section_id')->nullable()->constrained('services_trees');
        });

        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('reviews_id')->nullable()->constrained('reviews');
            $table->foreignId('posts_id')->nullable()->constrained('posts');
            $table->unsignedBigInteger('role_id')->nullable();
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('set null');
        });

        Schema::table('reviews', function (Blueprint $table) {
            $table->foreignId('users_id')->nullable()->constrained('users');
        });

        Schema::table('posts', function (Blueprint $table) {
            $table->foreignId('users_id')->nullable()->constrained('users');
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
