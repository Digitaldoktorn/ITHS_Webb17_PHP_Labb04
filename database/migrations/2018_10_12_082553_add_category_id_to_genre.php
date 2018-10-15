<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCategoryIdToGenre extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('genre', function (Blueprint $table) {
            $table->integer('category_id')->nullable()
            unsigned();//making it optional with nullable and unsigned -with integer just store positive numbers for memory
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('genre', function (Blueprint $table) {
            $table->dropColumn('category_id');
        });
    }
}
