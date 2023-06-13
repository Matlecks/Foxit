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
            $table->string('phone')->nullable();
            $table->string('role');
            $table->softDeletes();
            $table->string('name')->nullable();
            $table->string('surname')->nullable();
            $table->string('job')->nullable();
            $table->text('anounce_text')->nullable();
            $table->text('anounce_image')->nullable();
            $table->text('details_text')->nullable();
            $table->text('details_image')->nullable();
            $table->text('avatar')->nullable();
            $table->text('logo')->nullable();
            $table->text('SEOTitle')->nullable();
            $table->text('SEOKeys')->nullable();
            $table->text('SEODescription')->nullable();
            $table->text('ALTAnounceImg')->nullable();
            $table->text('TITLEAnounceImg')->nullable();
            $table->text('FileNameAnounceImg')->nullable();
            $table->text('ALTDetailsImg')->nullable();
            $table->text('TITLEDetailsImg')->nullable();
            $table->text('FileNameDetailsImg')->nullable();
            $table->text('TAGS')->nullable();
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
