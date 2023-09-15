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
        Schema::create('enquiries', function (Blueprint $table) {
            $table->id();
            $table->integer('serviceId')->nullable(); 
            $table->string('type')->nullable();
            $table->string('fname')->nullable();  
            $table->string('lname')->nullable();  
            $table->string('email')->nullable(); 
            $table->string('phone')->nullable(); 
            $table->string('companyName')->nullable();
            $table->longText('message')->nullable();
            $table->string('status')->nullable(); 
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
        Schema::dropIfExists('enquiries');
    }
};
