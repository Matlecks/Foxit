<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\SoftDeletes;


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
            $table->id();
            $table->string('login');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('role');
            $table->softDeletes();
            $table->string('name');
            $table->string('surname');
            $table->text('anounce_text');
            $table->text('anounce_image');
            $table->text('detail_text');
            $table->text('detail_image');
            //$table->foreignId('projects_id')->constrained('projects');
            //$table->foreignId('services_id')->constrained('services');
            //$table->foreignId('reviews_id')->constrained('reviews');
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
        Schema::dropIfExists('users');
    }
};
