<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableQuestions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_questions', function (Blueprint $table) {
            $table->bigIncrements('qes_id');
            $table->Text('qes_content');
            $table->Text('qes_answer_a');
            $table->Text('qes_answer_b');
            $table->Text('qes_answer_c');
            $table->Text('qes_answer_d');
            $table->Text('qes_correct_answer');
            $table->BigInteger('qes_test_id')->unsigned();
            $table->timestamps();
            $table->foreign('qes_test_id')->references('test_id')->on('tbl_tests')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_questions');
    }
}
