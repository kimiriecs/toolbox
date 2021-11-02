<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            // $table->unsignedBigInteger('parent_id');
            $table->foreignId('parent_id')->nullable()->references('id')->on('categories');
            $table->timestamps();
        });

        // Schema::table('categories', function (Blueprint $table) {
        //     $table->foreignId('parent_id')->references('id')->on('categories');
        // });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
