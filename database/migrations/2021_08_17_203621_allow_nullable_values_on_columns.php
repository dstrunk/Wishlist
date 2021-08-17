<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AllowNullableValuesOnColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('wishlists', function (Blueprint $table) {
            $table->string('description')->nullable()->change();
        });

        Schema::table('ideas', function (Blueprint $table) {
            $table->string('brand')->nullable()->change();
            $table->string('description')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('wishlists', function (Blueprint $table) {
            $table->string('description')->nullable(false)->change();
        });

        Schema::table('ideas', function (Blueprint $table) {
            $table->string('brand')->nullable(false)->change();
            $table->string('description')->nullable(false)->change();
        });
    }
}
