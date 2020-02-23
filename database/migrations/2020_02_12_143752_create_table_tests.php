<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTests extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_tests', function (Blueprint $table) {
            $table->bigIncrements('test_id');
            $table->String('test_name');
            $table->String('test_description');
            $table->String('test_note');
            $table->Integer('test_total_questions');
            $table->Integer('test_times');
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
        Schema::dropIfExists('table_tests');
    }
}
