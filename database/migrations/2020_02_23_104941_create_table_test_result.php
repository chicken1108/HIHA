<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTestResult extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_test_result', function (Blueprint $table) {
            $table->bigIncrements('ter_id');
            $table->bigInteger('ter_test_id')->unsigned();
            $table->Integer('ter_num_correct');
            $table->Integer('ter_num_wrong');
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
        Schema::dropIfExists('table_test_result');
    }
}
