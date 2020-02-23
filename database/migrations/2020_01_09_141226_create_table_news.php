<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableNews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_news', function (Blueprint $table) {
            $table->bigIncrements('news_id');
            $table->String('news_slug');
            $table->String('news_title');
            $table->String('news_desc');
            $table->String('news_detail');
            $table->bigInteger('news_cateid')->unsigned();
            $table->timestamps();
            $table->foreign('news_cateid')->references('cate_id')->on('tbl_category')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_news');
    }
}
