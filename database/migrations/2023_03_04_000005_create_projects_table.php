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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('anounce_text')->nullable();
            $table->text('anounce_image')->nullable();
            $table->text('details_text')->nullable();
            $table->text('details_image')->nullable();
            $table->string('sphere')->nullable();
            $table->text('link')->nullable();
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
            $table->softDeletes();
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
        Schema::dropIfExists('projects');
    }
};
