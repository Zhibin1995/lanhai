<?php

use yii\db\Migration;

class m191018_145934_people extends Migration
{
    public function up()
    {
        /* 取消外键约束 */
        $this->execute('SET foreign_key_checks = 0');
        
        /* 创建表 */
        $this->createTable('{{%people}}', [
            'id' => "int(11) unsigned NOT NULL AUTO_INCREMENT",
            'project_id' => "int(11) unsigned NOT NULL COMMENT '项目'",
            'name' => "varchar(255) NOT NULL COMMENT '姓名'",
            'phone' => "varchar(20) NOT NULL COMMENT '手机号码'",
            'photo' => "varchar(1023) NOT NULL COMMENT '照片'",
            'sort' => "int(11) unsigned NULL DEFAULT '0' COMMENT '排序'",
            'status' => "tinyint(4) NULL DEFAULT '1' COMMENT '状态'",
            'created_at' => "int(10) NULL COMMENT '创建时间'",
            'create_user' => "int(10) NULL COMMENT '创建人'",
            'updated_at' => "int(10) NULL COMMENT '修改时间'",
            'updated_user' => "int(10) NULL COMMENT '修改人'",
            'PRIMARY KEY (`id`)'
        ], "ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='招商人员表'");
        
        /* 索引设置 */
        
        
        /* 表数据 */
        
        /* 设置外键约束 */
        $this->execute('SET foreign_key_checks = 1;');
    }

    public function down()
    {
        $this->execute('SET foreign_key_checks = 0');
        /* 删除表 */
        $this->dropTable('{{%people}}');
        $this->execute('SET foreign_key_checks = 1;');
    }
}

