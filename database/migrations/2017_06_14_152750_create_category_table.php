<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('category', function (Blueprint $table) {
            $table->increments('cate_id')->comment('节点ID');
            $table->integer('cate_pid')->comment('节点父ID');
//            $table->string('node_pid_path')->default(',0,');
            $table->string('cate_name')->comment('文章分类名称');
//            $table->string('cate_title')->comment('标题');
//            $table->integer('cate_view')->comment('查看次数')->default('0');
            $table->integer('cate_order')->comment('排序')->default('0');
            //cate_title cate_view


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
        Schema::dropIfExists('category');
    }
}
