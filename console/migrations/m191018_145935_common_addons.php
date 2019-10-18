<?php

use yii\db\Migration;

class m191018_145935_common_addons extends Migration
{
    public function up()
    {
        /* 取消外键约束 */
        $this->execute('SET foreign_key_checks = 0');
        
        /* 创建表 */
        $this->createTable('{{%common_addons}}', [
            'id' => "int(11) NOT NULL AUTO_INCREMENT COMMENT '主键'",
            'title' => "varchar(20) NOT NULL DEFAULT '' COMMENT '中文名'",
            'name' => "varchar(100) NOT NULL DEFAULT '' COMMENT '插件名或标识'",
            'title_initial' => "varchar(1) NOT NULL DEFAULT '' COMMENT '首字母拼音'",
            'bootstrap' => "varchar(200) NULL DEFAULT '' COMMENT '启用文件'",
            'cover' => "varchar(200) NULL DEFAULT '' COMMENT '封面'",
            'group' => "varchar(20) NULL DEFAULT '' COMMENT '组别'",
            'brief_introduction' => "varchar(140) NULL DEFAULT '' COMMENT '简单介绍'",
            'description' => "varchar(1000) NULL DEFAULT '' COMMENT '插件描述'",
            'author' => "varchar(40) NULL DEFAULT '' COMMENT '作者'",
            'version' => "varchar(20) NULL DEFAULT '' COMMENT '版本号'",
            'wechat_message' => "json NULL COMMENT '接收微信回复类别'",
            'is_setting' => "tinyint(1) NULL DEFAULT '-1' COMMENT '设置'",
            'is_hook' => "tinyint(1) NULL DEFAULT '0' COMMENT '钩子[0:不支持;1:支持]'",
            'is_rule' => "tinyint(4) NULL DEFAULT '0' COMMENT '是否要嵌入规则'",
            'status' => "tinyint(4) NULL DEFAULT '1' COMMENT '状态[-1:删除;0:禁用;1启用]'",
            'created_at' => "int(10) unsigned NULL DEFAULT '0' COMMENT '创建时间'",
            'updated_at' => "int(10) unsigned NULL DEFAULT '0' COMMENT '修改时间'",
            'PRIMARY KEY (`id`)'
        ], "ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='公用_插件表'");
        
        /* 索引设置 */
        $this->createIndex('name','{{%common_addons}}','name',0);
        $this->createIndex('update','{{%common_addons}}','updated_at',0);
        
        
        /* 表数据 */
        $this->insert('{{%common_addons}}',['id'=>'1','title'=>'小助手','name'=>'RfHelpers','title_initial'=>'X','bootstrap'=>'addons\\RfHelpers\\common\\components\\Bootstrap','cover'=>'','group'=>'services','brief_introduction'=>'有事助手干','description'=>'提供一些简单的增强辅助工具，比如生成二维码、查看系统状态等等','author'=>'简言','version'=>'1.0.0','wechat_message'=>'[]','is_setting'=>'0','is_hook'=>'0','is_rule'=>'0','status'=>'1','created_at'=>'1571410541','updated_at'=>'1571410541']);
        $this->insert('{{%common_addons}}',['id'=>'2','title'=>'开发工具','name'=>'RfDevTool','title_initial'=>'K','bootstrap'=>'','cover'=>'','group'=>'services','brief_introduction'=>'提供一些简单的开发辅助工具，比如爬取省市区，数据迁移等等','description'=>'让你更加快捷的进行系统开发','author'=>'简言','version'=>'1.0.0','wechat_message'=>'[]','is_setting'=>'0','is_hook'=>'0','is_rule'=>'0','status'=>'1','created_at'=>'1571410644','updated_at'=>'1571410644']);
        
        /* 设置外键约束 */
        $this->execute('SET foreign_key_checks = 1;');
    }

    public function down()
    {
        $this->execute('SET foreign_key_checks = 0');
        /* 删除表 */
        $this->dropTable('{{%common_addons}}');
        $this->execute('SET foreign_key_checks = 1;');
    }
}

