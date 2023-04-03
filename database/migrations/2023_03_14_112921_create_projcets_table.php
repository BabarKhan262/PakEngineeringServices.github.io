<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateProjcetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projcets', function (Blueprint $table) {
            $table->bigIncrements('p_id');
            $table->bigInteger('cat_id')->unsigned();
            $table->string('title');
            $table->string('desc');
            $table->string('architects');
            $table->string('location');
            $table->string('area');
            $table->string('manufactures');
            $table->string('image');
            $table->string('side_image_1');
            $table->string('side_image_2');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projcets');
    }
}
