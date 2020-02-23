<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableDocument extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_document', function (Blueprint $table) {
            $table->bigIncrements('doc_id');
            $table->String('doc_slug');
            $table->String('doc_title');
            $table->Text('doc_content')->null();
            $table->Biginteger('doc_docateid')->unsigned();
            $table->foreign('doc_docateid')->references('docate_id')->on('tbl_document_category')->onDelete('cascade');
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
        Schema::dropIfExists('table_document');
    }
}
