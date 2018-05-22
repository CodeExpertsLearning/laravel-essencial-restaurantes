<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableMenuAddForeignRestaurant extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('menus', function(Blueprint $table){

        	$table->integer('restaurant_id')->unsigned();
			$table->foreign('restaurant_id')->references('id')->on('restaurants');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
	    Schema::table('menus', function(Blueprint $table){
		    $table->dropForeign('menus_restaurant_id_foreign');
		    $table->dropColumn('restaurant_id');
	    });
    }
}
