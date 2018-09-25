<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppNavsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_navs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tbl_menu_1', 100);
            $table->string('tbl_menu_2', 100);
            $table->string('tbl_menu_3', 100);
            $table->string('tbl_menu_4', 100);
            $table->string('tbl_menu_5', 100);
            $table->string('tbl_menu_6', 100);
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
        Schema::dropIfExists('app_navs');
    }
}
