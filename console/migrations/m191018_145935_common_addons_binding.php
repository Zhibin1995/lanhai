<?php

use yii\db\Migration;

class m191018_145935_common_addons_binding extends Migration
{
    public function up()
    {
        /* 取消外键约束 */
        $this->execute('SET foreign_key_checks = 0');
        
        /* 创建表 */
        $this->createTable('{{%common_addons_binding}}', [
            'id' => "int(11) NOT NULL AUTO_INCREMENT COMMENT '主键'",
            'addons_name' => "varchar(100) NOT NULL DEFAULT '' COMMENT '插件名称'",
            'app_id' => "varchar(20) NOT NULL DEFAULT '' COMMENT '应用'",
            'entry' => "varchar(10) NOT NULL DEFAULT '' COMMENT '入口类别[menu,cover]'",
            'title' => "varchar(50) NOT NULL DEFAULT '' COMMENT '名称'",
            'route' => "varchar(30) NOT NULL DEFAULT '' COMMENT '路由'",
            'icon' => "varchar(50) NULL DEFAULT '' COMMENT '图标'",
            'params' => "json NULL COMMENT '参数'",
            'PRIMARY KEY (`id`)'
        ], "ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='公用_插件菜单表'");
        
        /* 索引设置 */
        $this->createIndex('addons_name','{{%common_addons_binding}}','addons_name',0);
        
        
        /* 表数据 */
        $this->insert('{{%common_addons_binding}}',['id'=>'1','addons_name'=>'RfHelpers','app_id'=>'backend','entry'=>'menu','title'=>'二维码生成','route'=>'qr/index','icon'=>'','params'=>'[]']);
        $this->insert('{{%common_addons_binding}}',['id'=>'2','addons_name'=>'RfHelpers','app_id'=>'backend','entry'=>'menu','title'=>'数据备份','route'=>'data-base/backups','icon'=>'','params'=>'[]']);
        $this->insert('{{%common_addons_binding}}',['id'=>'3','addons_name'=>'RfHelpers','app_id'=>'backend','entry'=>'menu','title'=>'队列监控','route'=>'queue/info','icon'=>'','params'=>'[]']);
        $this->insert('{{%common_addons_binding}}',['id'=>'4','addons_name'=>'RfHelpers','app_id'=>'backend','entry'=>'menu','title'=>'系统探针','route'=>'system/probe','icon'=>'','params'=>'[]']);
        $this->insert('{{%common_addons_binding}}',['id'=>'5','addons_name'=>'RfDevTool','app_id'=>'backend','entry'=>'menu','title'=>'数据迁移生成','route'=>'migrate/index','icon'=>'','params'=>'[]']);
        $this->insert('{{%common_addons_binding}}',['id'=>'6','addons_name'=>'RfDevTool','app_id'=>'backend','entry'=>'menu','title'=>'Excel导入权限','route'=>'auth/index','icon'=>'','params'=>'[]']);
        $this->insert('{{%common_addons_binding}}',['id'=>'7','addons_name'=>'RfDevTool','app_id'=>'backend','entry'=>'menu','title'=>'省市区爬虫','route'=>'province-job/index','icon'=>'','params'=>'[]']);
        $this->insert('{{%common_addons_binding}}',['id'=>'8','addons_name'=>'RfDevTool','app_id'=>'backend','entry'=>'menu','title'=>'时间戳转换','route'=>'timestamp/index','icon'=>'','params'=>'[]']);
        $this->insert('{{%common_addons_binding}}',['id'=>'9','addons_name'=>'RfDevTool','app_id'=>'backend','entry'=>'menu','title'=>'PHP信息','route'=>'php-info/index','icon'=>'','params'=>'[]']);
        
        /* 设置外键约束 */
        $this->execute('SET foreign_key_checks = 1;');
    }

    public function down()
    {
        $this->execute('SET foreign_key_checks = 0');
        /* 删除表 */
        $this->dropTable('{{%common_addons_binding}}');
        $this->execute('SET foreign_key_checks = 1;');
    }
}

