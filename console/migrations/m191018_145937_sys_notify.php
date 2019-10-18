<?php

use yii\db\Migration;

class m191018_145937_sys_notify extends Migration
{
    public function up()
    {
        /* 取消外键约束 */
        $this->execute('SET foreign_key_checks = 0');
        
        /* 创建表 */
        $this->createTable('{{%sys_notify}}', [
            'id' => "bigint(20) NOT NULL AUTO_INCREMENT COMMENT '主键'",
            'title' => "varchar(150) NULL DEFAULT '' COMMENT '标题'",
            'content' => "text NULL COMMENT '消息内容'",
            'type' => "tinyint(1) NULL DEFAULT '0' COMMENT '消息类型[1:公告;2:提醒;3:信息(私信)'",
            'target_id' => "int(10) NULL DEFAULT '0' COMMENT '目标id'",
            'target_type' => "varchar(100) NULL DEFAULT '' COMMENT '目标类型'",
            'target_display' => "int(10) NULL DEFAULT '1' COMMENT '接受者是否删除'",
            'action' => "varchar(100) NULL DEFAULT '' COMMENT '动作'",
            'view' => "int(10) NULL DEFAULT '0' COMMENT '浏览量'",
            'sender_id' => "int(10) NULL DEFAULT '0' COMMENT '发送者id'",
            'sender_display' => "tinyint(1) NULL DEFAULT '1' COMMENT '发送者是否删除'",
            'sender_withdraw' => "tinyint(1) NULL DEFAULT '1' COMMENT '是否撤回 0是撤回'",
            'status' => "tinyint(4) NOT NULL DEFAULT '1' COMMENT '状态[-1:删除;0:禁用;1启用]'",
            'created_at' => "int(10) NOT NULL DEFAULT '0' COMMENT '创建时间'",
            'updated_at' => "int(10) unsigned NULL DEFAULT '0' COMMENT '修改时间'",
            'PRIMARY KEY (`id`)'
        ], "ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='系统_消息公告表'");
        
        /* 索引设置 */
        
        
        /* 表数据 */
        $this->insert('{{%sys_notify}}',['id'=>'1','title'=>'','content'=>'错误请求：Setting unknown property: backend\\components\\gii\\crud\\Generator::allowedIPs','type'=>'2','target_id'=>'1','target_type'=>'log_create','target_display'=>'1','action'=>'log_error','view'=>'0','sender_id'=>'1','sender_display'=>'1','sender_withdraw'=>'1','status'=>'1','created_at'=>'1571157463','updated_at'=>'1571157463']);
        $this->insert('{{%sys_notify}}',['id'=>'2','title'=>'','content'=>'信息行为：common/config/update-info','type'=>'2','target_id'=>'2','target_type'=>'behavior_create','target_display'=>'1','action'=>'behavior_info','view'=>'0','sender_id'=>'1','sender_display'=>'1','sender_withdraw'=>'1','status'=>'1','created_at'=>'1571157800','updated_at'=>'1571157800']);
        $this->insert('{{%sys_notify}}',['id'=>'3','title'=>'','content'=>'信息行为：common/config/update-info','type'=>'2','target_id'=>'3','target_type'=>'behavior_create','target_display'=>'1','action'=>'behavior_info','view'=>'0','sender_id'=>'1','sender_display'=>'1','sender_withdraw'=>'1','status'=>'1','created_at'=>'1571157856','updated_at'=>'1571157856']);
        $this->insert('{{%sys_notify}}',['id'=>'4','title'=>'','content'=>'警告请求：页面未找到。','type'=>'2','target_id'=>'2','target_type'=>'log_create','target_display'=>'1','action'=>'log_warning','view'=>'0','sender_id'=>'0','sender_display'=>'1','sender_withdraw'=>'1','status'=>'1','created_at'=>'1571329555','updated_at'=>'1571329555']);
        $this->insert('{{%sys_notify}}',['id'=>'5','title'=>'','content'=>'警告请求：页面未找到。','type'=>'2','target_id'=>'3','target_type'=>'log_create','target_display'=>'1','action'=>'log_warning','view'=>'0','sender_id'=>'0','sender_display'=>'1','sender_withdraw'=>'1','status'=>'1','created_at'=>'1571329569','updated_at'=>'1571329569']);
        $this->insert('{{%sys_notify}}',['id'=>'6','title'=>'','content'=>'警告请求：页面未找到。','type'=>'2','target_id'=>'4','target_type'=>'log_create','target_display'=>'1','action'=>'log_warning','view'=>'0','sender_id'=>'0','sender_display'=>'1','sender_withdraw'=>'1','status'=>'1','created_at'=>'1571329659','updated_at'=>'1571329659']);
        $this->insert('{{%sys_notify}}',['id'=>'7','title'=>'','content'=>'警告请求：页面未找到。','type'=>'2','target_id'=>'5','target_type'=>'log_create','target_display'=>'1','action'=>'log_warning','view'=>'0','sender_id'=>'0','sender_display'=>'1','sender_withdraw'=>'1','status'=>'1','created_at'=>'1571329734','updated_at'=>'1571329734']);
        $this->insert('{{%sys_notify}}',['id'=>'8','title'=>'','content'=>'警告请求：页面未找到。','type'=>'2','target_id'=>'6','target_type'=>'log_create','target_display'=>'1','action'=>'log_warning','view'=>'0','sender_id'=>'0','sender_display'=>'1','sender_withdraw'=>'1','status'=>'1','created_at'=>'1571329736','updated_at'=>'1571329736']);
        $this->insert('{{%sys_notify}}',['id'=>'9','title'=>'','content'=>'警告请求：页面未找到。','type'=>'2','target_id'=>'7','target_type'=>'log_create','target_display'=>'1','action'=>'log_warning','view'=>'0','sender_id'=>'0','sender_display'=>'1','sender_withdraw'=>'1','status'=>'1','created_at'=>'1571329793','updated_at'=>'1571329793']);
        $this->insert('{{%sys_notify}}',['id'=>'10','title'=>'','content'=>'警告请求：页面未找到。','type'=>'2','target_id'=>'8','target_type'=>'log_create','target_display'=>'1','action'=>'log_warning','view'=>'0','sender_id'=>'0','sender_display'=>'1','sender_withdraw'=>'1','status'=>'1','created_at'=>'1571329873','updated_at'=>'1571329873']);
        $this->insert('{{%sys_notify}}',['id'=>'11','title'=>'','content'=>'警告请求：页面未找到。','type'=>'2','target_id'=>'10','target_type'=>'log_create','target_display'=>'1','action'=>'log_warning','view'=>'0','sender_id'=>'0','sender_display'=>'1','sender_withdraw'=>'1','status'=>'1','created_at'=>'1571329918','updated_at'=>'1571329918']);
        $this->insert('{{%sys_notify}}',['id'=>'12','title'=>'','content'=>'警告请求：页面未找到。','type'=>'2','target_id'=>'12','target_type'=>'log_create','target_display'=>'1','action'=>'log_warning','view'=>'0','sender_id'=>'0','sender_display'=>'1','sender_withdraw'=>'1','status'=>'1','created_at'=>'1571329953','updated_at'=>'1571329953']);
        $this->insert('{{%sys_notify}}',['id'=>'13','title'=>'','content'=>'警告请求：页面未找到。','type'=>'2','target_id'=>'13','target_type'=>'log_create','target_display'=>'1','action'=>'log_warning','view'=>'0','sender_id'=>'0','sender_display'=>'1','sender_withdraw'=>'1','status'=>'1','created_at'=>'1571329983','updated_at'=>'1571329983']);
        $this->insert('{{%sys_notify}}',['id'=>'14','title'=>'','content'=>'警告请求：页面未找到。','type'=>'2','target_id'=>'14','target_type'=>'log_create','target_display'=>'1','action'=>'log_warning','view'=>'0','sender_id'=>'0','sender_display'=>'1','sender_withdraw'=>'1','status'=>'1','created_at'=>'1571330085','updated_at'=>'1571330085']);
        $this->insert('{{%sys_notify}}',['id'=>'15','title'=>'','content'=>'警告请求：页面未找到。','type'=>'2','target_id'=>'15','target_type'=>'log_create','target_display'=>'1','action'=>'log_warning','view'=>'0','sender_id'=>'0','sender_display'=>'1','sender_withdraw'=>'1','status'=>'1','created_at'=>'1571330090','updated_at'=>'1571330090']);
        $this->insert('{{%sys_notify}}',['id'=>'16','title'=>'','content'=>'警告请求：页面未找到。','type'=>'2','target_id'=>'16','target_type'=>'log_create','target_display'=>'1','action'=>'log_warning','view'=>'0','sender_id'=>'0','sender_display'=>'1','sender_withdraw'=>'1','status'=>'1','created_at'=>'1571330138','updated_at'=>'1571330138']);
        $this->insert('{{%sys_notify}}',['id'=>'17','title'=>'','content'=>'警告请求：页面未找到。','type'=>'2','target_id'=>'17','target_type'=>'log_create','target_display'=>'1','action'=>'log_warning','view'=>'0','sender_id'=>'0','sender_display'=>'1','sender_withdraw'=>'1','status'=>'1','created_at'=>'1571330294','updated_at'=>'1571330294']);
        $this->insert('{{%sys_notify}}',['id'=>'18','title'=>'','content'=>'警告请求：页面未找到。','type'=>'2','target_id'=>'18','target_type'=>'log_create','target_display'=>'1','action'=>'log_warning','view'=>'0','sender_id'=>'0','sender_display'=>'1','sender_withdraw'=>'1','status'=>'1','created_at'=>'1571330297','updated_at'=>'1571330297']);
        $this->insert('{{%sys_notify}}',['id'=>'19','title'=>'','content'=>'警告请求：页面未找到。','type'=>'2','target_id'=>'19','target_type'=>'log_create','target_display'=>'1','action'=>'log_warning','view'=>'0','sender_id'=>'0','sender_display'=>'1','sender_withdraw'=>'1','status'=>'1','created_at'=>'1571330301','updated_at'=>'1571330301']);
        $this->insert('{{%sys_notify}}',['id'=>'20','title'=>'','content'=>'警告请求：页面未找到。','type'=>'2','target_id'=>'20','target_type'=>'log_create','target_display'=>'1','action'=>'log_warning','view'=>'0','sender_id'=>'0','sender_display'=>'1','sender_withdraw'=>'1','status'=>'1','created_at'=>'1571330310','updated_at'=>'1571330310']);
        $this->insert('{{%sys_notify}}',['id'=>'21','title'=>'','content'=>'错误请求：The \"modelClass\" property must be set.','type'=>'2','target_id'=>'21','target_type'=>'log_create','target_display'=>'1','action'=>'log_error','view'=>'0','sender_id'=>'0','sender_display'=>'1','sender_withdraw'=>'1','status'=>'1','created_at'=>'1571330348','updated_at'=>'1571330348']);
        $this->insert('{{%sys_notify}}',['id'=>'22','title'=>'','content'=>'警告请求：页面未找到。','type'=>'2','target_id'=>'22','target_type'=>'log_create','target_display'=>'1','action'=>'log_warning','view'=>'0','sender_id'=>'0','sender_display'=>'1','sender_withdraw'=>'1','status'=>'1','created_at'=>'1571330420','updated_at'=>'1571330420']);
        $this->insert('{{%sys_notify}}',['id'=>'23','title'=>'','content'=>'警告请求：页面未找到。','type'=>'2','target_id'=>'23','target_type'=>'log_create','target_display'=>'1','action'=>'log_warning','view'=>'0','sender_id'=>'0','sender_display'=>'1','sender_withdraw'=>'1','status'=>'1','created_at'=>'1571330423','updated_at'=>'1571330423']);
        $this->insert('{{%sys_notify}}',['id'=>'24','title'=>'','content'=>'警告请求：页面未找到。','type'=>'2','target_id'=>'24','target_type'=>'log_create','target_display'=>'1','action'=>'log_warning','view'=>'0','sender_id'=>'0','sender_display'=>'1','sender_withdraw'=>'1','status'=>'1','created_at'=>'1571330449','updated_at'=>'1571330449']);
        $this->insert('{{%sys_notify}}',['id'=>'25','title'=>'','content'=>'警告请求：页面未找到。','type'=>'2','target_id'=>'25','target_type'=>'log_create','target_display'=>'1','action'=>'log_warning','view'=>'0','sender_id'=>'0','sender_display'=>'1','sender_withdraw'=>'1','status'=>'1','created_at'=>'1571330465','updated_at'=>'1571330465']);
        $this->insert('{{%sys_notify}}',['id'=>'26','title'=>'','content'=>'警告请求：页面未找到。','type'=>'2','target_id'=>'26','target_type'=>'log_create','target_display'=>'1','action'=>'log_warning','view'=>'0','sender_id'=>'0','sender_display'=>'1','sender_withdraw'=>'1','status'=>'1','created_at'=>'1571330466','updated_at'=>'1571330466']);
        $this->insert('{{%sys_notify}}',['id'=>'27','title'=>'','content'=>'警告请求：页面未找到。','type'=>'2','target_id'=>'27','target_type'=>'log_create','target_display'=>'1','action'=>'log_warning','view'=>'0','sender_id'=>'0','sender_display'=>'1','sender_withdraw'=>'1','status'=>'1','created_at'=>'1571330511','updated_at'=>'1571330511']);
        $this->insert('{{%sys_notify}}',['id'=>'28','title'=>'','content'=>'警告请求：页面未找到。','type'=>'2','target_id'=>'28','target_type'=>'log_create','target_display'=>'1','action'=>'log_warning','view'=>'0','sender_id'=>'0','sender_display'=>'1','sender_withdraw'=>'1','status'=>'1','created_at'=>'1571330512','updated_at'=>'1571330512']);
        $this->insert('{{%sys_notify}}',['id'=>'29','title'=>'','content'=>'错误请求：Class \'common\\app\\models\\Banner\' not found','type'=>'2','target_id'=>'30','target_type'=>'log_create','target_display'=>'1','action'=>'log_error','view'=>'0','sender_id'=>'0','sender_display'=>'1','sender_withdraw'=>'1','status'=>'1','created_at'=>'1571331184','updated_at'=>'1571331184']);
        $this->insert('{{%sys_notify}}',['id'=>'30','title'=>'','content'=>'错误请求：Class \'common\\app\\models\\Banner\' not found','type'=>'2','target_id'=>'31','target_type'=>'log_create','target_display'=>'1','action'=>'log_error','view'=>'0','sender_id'=>'0','sender_display'=>'1','sender_withdraw'=>'1','status'=>'1','created_at'=>'1571331226','updated_at'=>'1571331226']);
        $this->insert('{{%sys_notify}}',['id'=>'31','title'=>'','content'=>'错误请求：Class \'common\\app\\models\\Banner\' not found','type'=>'2','target_id'=>'32','target_type'=>'log_create','target_display'=>'1','action'=>'log_error','view'=>'0','sender_id'=>'0','sender_display'=>'1','sender_withdraw'=>'1','status'=>'1','created_at'=>'1571331227','updated_at'=>'1571331227']);
        $this->insert('{{%sys_notify}}',['id'=>'32','title'=>'','content'=>'错误请求：Class \'common\\app\\models\\Banner\' not found','type'=>'2','target_id'=>'33','target_type'=>'log_create','target_display'=>'1','action'=>'log_error','view'=>'0','sender_id'=>'0','sender_display'=>'1','sender_withdraw'=>'1','status'=>'1','created_at'=>'1571331325','updated_at'=>'1571331325']);
        $this->insert('{{%sys_notify}}',['id'=>'33','title'=>'','content'=>'错误请求：Class \'common\\app\\models\\Banner\' not found','type'=>'2','target_id'=>'34','target_type'=>'log_create','target_display'=>'1','action'=>'log_error','view'=>'0','sender_id'=>'0','sender_display'=>'1','sender_withdraw'=>'1','status'=>'1','created_at'=>'1571331326','updated_at'=>'1571331326']);
        $this->insert('{{%sys_notify}}',['id'=>'34','title'=>'','content'=>'错误请求：syntax error, unexpected \'::\' (T_PAAMAYIM_NEKUDOTAYIM)','type'=>'2','target_id'=>'35','target_type'=>'log_create','target_display'=>'1','action'=>'log_error','view'=>'0','sender_id'=>'0','sender_display'=>'1','sender_withdraw'=>'1','status'=>'1','created_at'=>'1571331990','updated_at'=>'1571331990']);
        $this->insert('{{%sys_notify}}',['id'=>'35','title'=>'','content'=>'错误请求：Class \'common\\app\\models\\Banner\' not found','type'=>'2','target_id'=>'36','target_type'=>'log_create','target_display'=>'1','action'=>'log_error','view'=>'0','sender_id'=>'0','sender_display'=>'1','sender_withdraw'=>'1','status'=>'1','created_at'=>'1571332038','updated_at'=>'1571332038']);
        $this->insert('{{%sys_notify}}',['id'=>'36','title'=>'','content'=>'错误请求：Too few arguments to function yii\\db\\Query::offset(), 0 passed in /var/www/html/lanhai/api/modules/v1/controllers/LanhaiController.php on line 34 and exactly 1 expected','type'=>'2','target_id'=>'38','target_type'=>'log_create','target_display'=>'1','action'=>'log_error','view'=>'0','sender_id'=>'0','sender_display'=>'1','sender_withdraw'=>'1','status'=>'1','created_at'=>'1571333010','updated_at'=>'1571333010']);
        $this->insert('{{%sys_notify}}',['id'=>'37','title'=>'','content'=>'警告请求：页面未找到。','type'=>'2','target_id'=>'41','target_type'=>'log_create','target_display'=>'1','action'=>'log_warning','view'=>'0','sender_id'=>'0','sender_display'=>'1','sender_withdraw'=>'1','status'=>'1','created_at'=>'1571333970','updated_at'=>'1571333970']);
        $this->insert('{{%sys_notify}}',['id'=>'38','title'=>'','content'=>'错误请求：Unable to find \'backend\\controllers\\AreaController\' in file: /var/www/html/lanhai/backend/controllers/AreaController.php. Namespace missing?','type'=>'2','target_id'=>'42','target_type'=>'log_create','target_display'=>'1','action'=>'log_error','view'=>'0','sender_id'=>'1','sender_display'=>'1','sender_withdraw'=>'1','status'=>'1','created_at'=>'1571334217','updated_at'=>'1571334217']);
        $this->insert('{{%sys_notify}}',['id'=>'39','title'=>'','content'=>'错误请求：The view file does not exist: /var/www/html/lanhai/backend/views/area/index.php','type'=>'2','target_id'=>'43','target_type'=>'log_create','target_display'=>'1','action'=>'log_error','view'=>'0','sender_id'=>'1','sender_display'=>'1','sender_withdraw'=>'1','status'=>'1','created_at'=>'1571334233','updated_at'=>'1571334233']);
        $this->insert('{{%sys_notify}}',['id'=>'40','title'=>'','content'=>'错误请求：SQLSTATE[42S22]: Column not found: 1054 Unknown column \'merchant_id\' in \'where clause\'
The SQL being executed was: SELECT * FROM `area` WHERE (`id`=\'1\') AND (`merchant_id`=1)','type'=>'2','target_id'=>'44','target_type'=>'log_create','target_display'=>'1','action'=>'log_error','view'=>'0','sender_id'=>'1','sender_display'=>'1','sender_withdraw'=>'1','status'=>'1','created_at'=>'1571334368','updated_at'=>'1571334368']);
        $this->insert('{{%sys_notify}}',['id'=>'41','title'=>'','content'=>'错误请求：SQLSTATE[42S22]: Column not found: 1054 Unknown column \'merchant_id\' in \'where clause\'
The SQL being executed was: SELECT * FROM `area` WHERE (`id`=\'1\') AND (`merchant_id`=1)','type'=>'2','target_id'=>'45','target_type'=>'log_create','target_display'=>'1','action'=>'log_error','view'=>'0','sender_id'=>'1','sender_display'=>'1','sender_withdraw'=>'1','status'=>'1','created_at'=>'1571334408','updated_at'=>'1571334408']);
        $this->insert('{{%sys_notify}}',['id'=>'42','title'=>'','content'=>'错误请求：syntax error, unexpected \'$pages\' (T_VARIABLE)','type'=>'2','target_id'=>'46','target_type'=>'log_create','target_display'=>'1','action'=>'log_error','view'=>'0','sender_id'=>'1','sender_display'=>'1','sender_withdraw'=>'1','status'=>'1','created_at'=>'1571334576','updated_at'=>'1571334576']);
        $this->insert('{{%sys_notify}}',['id'=>'43','title'=>'','content'=>'错误请求：SQLSTATE[42S22]: Column not found: 1054 Unknown column \'merchant_id\' in \'where clause\'
The SQL being executed was: SELECT * FROM `area` WHERE (`id`=\'1\') AND (`merchant_id`=1)','type'=>'2','target_id'=>'47','target_type'=>'log_create','target_display'=>'1','action'=>'log_error','view'=>'0','sender_id'=>'1','sender_display'=>'1','sender_withdraw'=>'1','status'=>'1','created_at'=>'1571334623','updated_at'=>'1571334623']);
        $this->insert('{{%sys_notify}}',['id'=>'44','title'=>'','content'=>'错误请求：Getting unknown property: common\\models\\app\\Project::img','type'=>'2','target_id'=>'48','target_type'=>'log_create','target_display'=>'1','action'=>'log_error','view'=>'0','sender_id'=>'1','sender_display'=>'1','sender_withdraw'=>'1','status'=>'1','created_at'=>'1571406676','updated_at'=>'1571406676']);
        $this->insert('{{%sys_notify}}',['id'=>'45','title'=>'','content'=>'错误请求：Array to string conversion','type'=>'2','target_id'=>'49','target_type'=>'log_create','target_display'=>'1','action'=>'log_error','view'=>'0','sender_id'=>'1','sender_display'=>'1','sender_withdraw'=>'1','status'=>'1','created_at'=>'1571407273','updated_at'=>'1571407273']);
        $this->insert('{{%sys_notify}}',['id'=>'46','title'=>'','content'=>'错误请求：Getting unknown property: common\\models\\app\\Project::url','type'=>'2','target_id'=>'50','target_type'=>'log_create','target_display'=>'1','action'=>'log_error','view'=>'0','sender_id'=>'1','sender_display'=>'1','sender_withdraw'=>'1','status'=>'1','created_at'=>'1571409012','updated_at'=>'1571409012']);
        $this->insert('{{%sys_notify}}',['id'=>'47','title'=>'','content'=>'警告请求：页面未找到。','type'=>'2','target_id'=>'51','target_type'=>'log_create','target_display'=>'1','action'=>'log_warning','view'=>'0','sender_id'=>'0','sender_display'=>'1','sender_withdraw'=>'1','status'=>'1','created_at'=>'1571409263','updated_at'=>'1571409263']);
        $this->insert('{{%sys_notify}}',['id'=>'48','title'=>'','content'=>'错误请求：Undefined index: facility_ids','type'=>'2','target_id'=>'54','target_type'=>'log_create','target_display'=>'1','action'=>'log_error','view'=>'0','sender_id'=>'0','sender_display'=>'1','sender_withdraw'=>'1','status'=>'1','created_at'=>'1571409326','updated_at'=>'1571409326']);
        $this->insert('{{%sys_notify}}',['id'=>'49','title'=>'','content'=>'错误请求：Undefined index: facility_ids','type'=>'2','target_id'=>'55','target_type'=>'log_create','target_display'=>'1','action'=>'log_error','view'=>'0','sender_id'=>'0','sender_display'=>'1','sender_withdraw'=>'1','status'=>'1','created_at'=>'1571409536','updated_at'=>'1571409536']);
        $this->insert('{{%sys_notify}}',['id'=>'50','title'=>'','content'=>'错误请求：Trying to get property \'facility_ids\' of non-object','type'=>'2','target_id'=>'56','target_type'=>'log_create','target_display'=>'1','action'=>'log_error','view'=>'0','sender_id'=>'0','sender_display'=>'1','sender_withdraw'=>'1','status'=>'1','created_at'=>'1571409559','updated_at'=>'1571409559']);
        $this->insert('{{%sys_notify}}',['id'=>'51','title'=>'','content'=>'错误请求：Undefined index: facility_ids','type'=>'2','target_id'=>'57','target_type'=>'log_create','target_display'=>'1','action'=>'log_error','view'=>'0','sender_id'=>'0','sender_display'=>'1','sender_withdraw'=>'1','status'=>'1','created_at'=>'1571409580','updated_at'=>'1571409580']);
        $this->insert('{{%sys_notify}}',['id'=>'52','title'=>'','content'=>'错误请求：implode(): Invalid arguments passed','type'=>'2','target_id'=>'60','target_type'=>'log_create','target_display'=>'1','action'=>'log_error','view'=>'0','sender_id'=>'0','sender_display'=>'1','sender_withdraw'=>'1','status'=>'1','created_at'=>'1571409693','updated_at'=>'1571409693']);
        $this->insert('{{%sys_notify}}',['id'=>'53','title'=>'','content'=>'信息行为：site/logout','type'=>'2','target_id'=>'4','target_type'=>'behavior_create','target_display'=>'1','action'=>'behavior_info','view'=>'0','sender_id'=>'1','sender_display'=>'1','sender_withdraw'=>'1','status'=>'1','created_at'=>'1571410266','updated_at'=>'1571410266']);
        
        /* 设置外键约束 */
        $this->execute('SET foreign_key_checks = 1;');
    }

    public function down()
    {
        $this->execute('SET foreign_key_checks = 0');
        /* 删除表 */
        $this->dropTable('{{%sys_notify}}');
        $this->execute('SET foreign_key_checks = 1;');
    }
}
