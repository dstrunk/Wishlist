<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateWishlistTableNames extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::rename('wish_lists', 'wishlists');
        Schema::table('ideas', function (Blueprint $table) {
            $table->renameColumn('wish_list_id', 'wishlist_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::rename('wishlists', 'wish_lists');
        Schema::table('ideas', function (Blueprint $table) {
            $table->renameColumn('wishlist_id', 'wish_list_id');
        });
    }
}
