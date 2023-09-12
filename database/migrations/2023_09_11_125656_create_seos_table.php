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
        Schema::create('seos', function (Blueprint $table) {
            $table->id();
            $table->integer('fieldId')->nullable();
            $table->string('type')->nullable();
            $table->string('title')->nullable();
            $table->string('metaTitle')->nullable();
            $table->string('metaKeyword')->nullable();
            $table->string('metaAuthor')->nullable();
            $table->string('metaRobot')->nullable();
            $table->string('ogTitle')->nullable();
            $table->string('ogImage')->nullable();
            $table->string('dcTitle')->nullable();
            $table->string('dcCreator')->nullable();
            $table->string('twitterImage')->nullable();
            $table->string('twitterTitle')->nullable();
            $table->string('twitterType')->nullable();
            $table->string('fbogTitle')->nullable();
            $table->string('fbogType')->nullable();
            $table->string('fbogSiteName')->nullable(); 
            $table->string('ipTitle')->nullable();
            $table->longText('metaDescription')->nullable();
            $table->longText('fbogDescription')->nullable();
            $table->longText('ogDescription')->nullable();
            $table->longText('dcDescription')->nullable();
            $table->longText('twitterDescription')->nullable();
            $table->longText('ipDescription')->nullable();
            $table->longText('schema1')->nullable();
            $table->longText('schema2')->nullable();
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
        Schema::dropIfExists('seos');
    }
};
