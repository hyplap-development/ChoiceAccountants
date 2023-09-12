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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->integer('departmentId')->nullable();  
            $table->string('name')->nullable();  
            $table->string('url')->nullable();  
            $table->string('slug')->nullable(); 
            $table->string('flag')->nullable(); 
            $table->text('subtitle')->nullable();
            $table->string('coverImage')->nullable();
            $table->string('necessaryImage')->nullable();
            $table->string('conclusionImage')->nullable();
            $table->string('coverImageAltTag')->nullable();
            $table->string('necessaryImageAltTag')->nullable();
            $table->string('conclusionImageAltTag')->nullable();
            $table->longText('homePageDesc')->nullable(); 
            $table->longText('intropara1')->nullable(); 
            $table->longText('intropara2')->nullable();
            $table->string('nt1')->nullable();  
            $table->longText('nta1')->nullable();
            $table->string('nt2')->nullable();
            $table->longText('nta2')->nullable();
            $table->string('nt3')->nullable();
            $table->longText('nta3')->nullable();
            $table->string('nt4')->nullable();
            $table->longText('nta4')->nullable();
            $table->string('nt5')->nullable();
            $table->longText('nta5')->nullable();
            $table->string('st1')->nullable();
            $table->longText('sta1')->nullable();
            $table->string('st2')->nullable();
            $table->longText('sta2')->nullable();
            $table->string('st3')->nullable();
            $table->longText('sta3')->nullable();
            $table->string('st4')->nullable();
            $table->longText('sta4')->nullable();
            $table->string('st5')->nullable();
            $table->longText('sta5')->nullable();
            $table->string('st6')->nullable();
            $table->longText('sta6')->nullable();
            $table->longText('conclusion')->nullable();
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
        Schema::dropIfExists('services');
    }
};
