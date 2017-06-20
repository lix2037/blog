<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('article', function (Blueprint $table) {
            $table->increments('article_id')->comment('ID');//article_order article_title article_content article_img article_time article_url
            $table->integer('article_order')->comment('排序')->default('0');
            $table->integer('cate_id')->comment('文章分类')->default('0');
            $table->string('article_title')->comment('标题')->default('');
            $table->string('article_content',10000)->comment('内容')->default('');
            $table->integer('article_view')->comment('观看次数')->default('0');
            $table->integer('article_review')->comment('审核状态 0=>发布代审核 1=>已发布 2=> 已下架')->default('0');
            $table->string('article_tags')->comment('标签')->default('');
            $table->string('article_author')->comment('作者')->default('');
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
        //
        Schema::dropIfExists('article');
    }
}
