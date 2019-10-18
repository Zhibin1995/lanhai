<?php

use yii\db\Migration;

class m191018_145934_project extends Migration
{
    public function up()
    {
        /* 取消外键约束 */
        $this->execute('SET foreign_key_checks = 0');
        
        /* 创建表 */
        $this->createTable('{{%project}}', [
            'id' => "int(11) unsigned NOT NULL AUTO_INCREMENT",
            'name' => "varchar(255) NOT NULL COMMENT '名称'",
            'desc' => "varchar(1023) NULL COMMENT '简介'",
            'area_id' => "int(11) unsigned NOT NULL COMMENT '面积'",
            'category_id' => "int(11) unsigned NOT NULL COMMENT '分类'",
            'city_id' => "int(11) unsigned NOT NULL COMMENT '城市'",
            'project_area' => "varchar(255) NOT NULL COMMENT '建筑面积'",
            'price_range' => "varchar(255) NOT NULL COMMENT '价格区间'",
            'contact' => "varchar(50) NOT NULL COMMENT '招商电话'",
            'address' => "varchar(255) NOT NULL COMMENT '项目地址'",
            'facility_ids' => "varchar(255) NULL COMMENT '空间设施'",
            'service_facility' => "varchar(1023) NULL COMMENT '服务设施描述'",
            'work' => "text NULL COMMENT '办公详情'",
            'park' => "text NULL COMMENT '工区详情'",
            'append' => "text NULL COMMENT '配套详情'",
            'service' => "text NULL COMMENT '服务详情'",
            'vr_url' => "varchar(1023) NULL COMMENT 'VR链接'",
            'sort' => "int(11) unsigned NULL DEFAULT '0' COMMENT '排序'",
            'status' => "tinyint(4) NULL DEFAULT '1' COMMENT '状态'",
            'created_at' => "int(10) NULL COMMENT '创建时间'",
            'create_user' => "int(10) NULL COMMENT '创建人'",
            'updated_at' => "int(10) NULL COMMENT '修改时间'",
            'updated_user' => "int(10) NULL COMMENT '修改人'",
            'PRIMARY KEY (`id`)'
        ], "ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='项目表'");
        
        /* 索引设置 */
        
        
        /* 表数据 */
        
        /* 设置外键约束 */
        $this->execute('SET foreign_key_checks = 1;');
    }

    public function down()
    {
        $this->execute('SET foreign_key_checks = 0');
        /* 删除表 */
        $this->dropTable('{{%project}}');
        $this->execute('SET foreign_key_checks = 1;');
    }
}

