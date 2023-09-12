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
        Schema::create('departments', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->string('url')->nullable();
            $table->string('image')->nullable();
            $table->string('imgAlt')->nullable();
            $table->string('bannerImage')->nullable();
            $table->string('bannerImgAlt')->nullable();
            $table->string('homePageDes')->nullable();
            $table->string('title')->nullable();
            $table->longText('shortDescription')->nullable();
            $table->string('subtitle')->nullable();
            $table->longText('description')->nullable();
            $table->boolean('status')->default(1);
            $table->boolean('deleteId')->default(0);
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
        Schema::dropIfExists('departments');
    }
};
