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
        Schema::create('careeropportunities', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();  
            $table->string('url')->nullable();  
            $table->string('slug')->nullable();  
            $table->text('subtitle')->nullable();
            $table->longText('description')->nullable();  
            $table->longText('responsibilities')->nullable(); 
            $table->longText('benefits')->nullable();       
            $table->boolean('status')->default(1);  
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
        Schema::dropIfExists('careeropportunities');
    }
};
