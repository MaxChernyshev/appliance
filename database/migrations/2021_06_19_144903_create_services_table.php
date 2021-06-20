<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->string('slug')->unique();
            $table->string('seo_title')->nullable();
            $table->string('seo_description')->nullable();
            $table->string('image')->nullable();

            $table->text('zip')->nullable();
            $table->text('iframe')->nullable();

            $table->text('content_1')->nullable();
            $table->text('content_1_1')->nullable();
            $table->string('image_1')->nullable();

            $table->text('content_2')->nullable();
            $table->text('content_2_1')->nullable();
            $table->string('image_2')->nullable();

            $table->text('content_3')->nullable();
            $table->text('content_3_1')->nullable();
            $table->string('image_3')->nullable();

            $table->text('content_4')->nullable();
            $table->text('content_4_1')->nullable();
            $table->string('image_4')->nullable();

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
        Schema::dropIfExists('services');
    }
}
