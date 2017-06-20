<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNodeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('node', function (Blueprint $table) {
            $table->increments('node_id')->comment('节点ID');
            $table->integer('node_pid')->comment('节点父ID');
            $table->string('node_pid_path')->default(',0,');
            $table->string('node_name')->comment('节点名称');
            $table->tinyInteger('node_level')->default('4')->comment('节点级别，也可以用来记录数组深度');
            $table->integer('px')->default('1')->comment('排序');
            $table->tinyInteger('expand')->default('1');
            $table->string('m_c_a')->default('')->comment('控制器or动作')->nullable();


        });

        //DROP TABLE IF EXISTS `sg_node`;
//        CREATE TABLE `sg_node` (
//    `node_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '节点ID',
//  `node_pid` int(11) NOT NULL COMMENT '节点父ID',
//  `node_pid_path` varchar(16) NOT NULL DEFAULT ',0,',
//  `m_c_a` varchar(64) DEFAULT NULL COMMENT '控制器or动作',
//  `node_name` varchar(32) NOT NULL COMMENT '节点名称',
//  `node_level` tinyint(1) NOT NULL DEFAULT '4' COMMENT '节点级别，也可以用来记录数组深度',
//  `px` int(5) NOT NULL DEFAULT '1' COMMENT '排序',
//  `st` tinyint(1) NOT NULL DEFAULT '1' COMMENT '节点状态 0:禁用；1:正常',
//  `expand` tinyint(1) NOT NULL DEFAULT '1',
//  PRIMARY KEY (`node_id`)
//) ENGINE=MyISAM AUTO_INCREMENT=240 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='节点表';
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('node');
    }
}
