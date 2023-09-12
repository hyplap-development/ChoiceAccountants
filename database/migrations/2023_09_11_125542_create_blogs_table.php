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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('url')->nullable();
            $table->string('slug')->nullable();
            $table->string('subtitle')->nullable();
            $table->integer('serviceId')->nullable();
            $table->string('type')->nullable();
            $table->string('image')->nullable();
            $table->string('imgAlt')->nullable();
            $table->longText('description1')->nullable();
            $table->longText('description2')->nullable();
            $table->string('writer')->nullable();
            $table->string('creator')->nullable();
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
        Schema::dropIfExists('blogs');
    }
};
