<?php

use yii\db\Migration;

class m191018_145936_migration extends Migration
{
    public function up()
    {
        /* 取消外键约束 */
        $this->execute('SET foreign_key_checks = 0');
        
        /* 创建表 */
        $this->createTable('{{%migration}}', [
            'version' => "varchar(180) NOT NULL",
            'apply_time' => "int(11) NULL",
            'PRIMARY KEY (`version`)'
        ], "ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci");
        
        /* 索引设置 */
        
        
        /* 表数据 */
        $this->insert('{{%migration}}',['version'=>'m000000_000000_base','apply_time'=>'1571149402']);
        $this->insert('{{%migration}}',['version'=>'m190719_024048_api_access_token','apply_time'=>'1571149406']);
        $this->insert('{{%migration}}',['version'=>'m190719_024048_common_addons','apply_time'=>'1571149406']);
        $this->insert('{{%migration}}',['version'=>'m190719_024048_common_addons_binding','apply_time'=>'1571149406']);
        $this->insert('{{%migration}}',['version'=>'m190719_024048_common_addons_config','apply_time'=>'1571149406']);
        $this->insert('{{%migration}}',['version'=>'m190719_024048_common_attachment','apply_time'=>'1571149406']);
        $this->insert('{{%migration}}',['version'=>'m190719_024048_common_auth_item_child','apply_time'=>'1571149406']);
        $this->insert('{{%migration}}',['version'=>'m190719_024048_common_config','apply_time'=>'1571149407']);
        $this->insert('{{%migration}}',['version'=>'m190719_024048_common_config_value','apply_time'=>'1571149407']);
        $this->insert('{{%migration}}',['version'=>'m190719_024048_common_ip_blacklist','apply_time'=>'1571149407']);
        $this->insert('{{%migration}}',['version'=>'m190719_024049_common_sms_log','apply_time'=>'1571149407']);
        $this->insert('{{%migration}}',['version'=>'m190719_024049_member_address','apply_time'=>'1571149407']);
        $this->insert('{{%migration}}',['version'=>'m190719_024049_member_auth','apply_time'=>'1571149407']);
        $this->insert('{{%migration}}',['version'=>'m190719_024049_oauth2_access_token','apply_time'=>'1571149407']);
        $this->insert('{{%migration}}',['version'=>'m190719_024049_oauth2_authorization_code','apply_time'=>'1571149407']);
        $this->insert('{{%migration}}',['version'=>'m190719_024049_oauth2_client','apply_time'=>'1571149407']);
        $this->insert('{{%migration}}',['version'=>'m190719_024049_oauth2_refresh_token','apply_time'=>'1571149408']);
        $this->insert('{{%migration}}',['version'=>'m190719_024049_sys_manager','apply_time'=>'1571149408']);
        $this->insert('{{%migration}}',['version'=>'m190719_024049_sys_notify','apply_time'=>'1571149408']);
        $this->insert('{{%migration}}',['version'=>'m190719_024049_sys_notify_manager','apply_time'=>'1571149408']);
        $this->insert('{{%migration}}',['version'=>'m190719_024049_wechat_attachment','apply_time'=>'1571149408']);
        $this->insert('{{%migration}}',['version'=>'m190719_024049_wechat_attachment_news','apply_time'=>'1571149408']);
        $this->insert('{{%migration}}',['version'=>'m190719_024050_wechat_fans','apply_time'=>'1571149408']);
        $this->insert('{{%migration}}',['version'=>'m190719_024050_wechat_fans_stat','apply_time'=>'1571149409']);
        $this->insert('{{%migration}}',['version'=>'m190719_024050_wechat_fans_tag_map','apply_time'=>'1571149409']);
        $this->insert('{{%migration}}',['version'=>'m190719_024050_wechat_fans_tags','apply_time'=>'1571149409']);
        $this->insert('{{%migration}}',['version'=>'m190719_024050_wechat_mass_record','apply_time'=>'1571149409']);
        $this->insert('{{%migration}}',['version'=>'m190719_024050_wechat_menu','apply_time'=>'1571149409']);
        $this->insert('{{%migration}}',['version'=>'m190719_024050_wechat_menu_provinces','apply_time'=>'1571149411']);
        $this->insert('{{%migration}}',['version'=>'m190719_024050_wechat_msg_history','apply_time'=>'1571149411']);
        $this->insert('{{%migration}}',['version'=>'m190719_024050_wechat_qrcode','apply_time'=>'1571149411']);
        $this->insert('{{%migration}}',['version'=>'m190719_024050_wechat_qrcode_stat','apply_time'=>'1571149411']);
        $this->insert('{{%migration}}',['version'=>'m190719_024050_wechat_reply_default','apply_time'=>'1571149411']);
        $this->insert('{{%migration}}',['version'=>'m190719_024050_wechat_rule','apply_time'=>'1571149411']);
        $this->insert('{{%migration}}',['version'=>'m190719_024050_wechat_rule_keyword','apply_time'=>'1571149411']);
        $this->insert('{{%migration}}',['version'=>'m190719_024050_wechat_rule_keyword_stat','apply_time'=>'1571149411']);
        $this->insert('{{%migration}}',['version'=>'m190719_024050_wechat_rule_stat','apply_time'=>'1571149411']);
        $this->insert('{{%migration}}',['version'=>'m190719_024050_wechat_setting','apply_time'=>'1571149411']);
        $this->insert('{{%migration}}',['version'=>'m190729_021333_common_action_log','apply_time'=>'1571149412']);
        $this->insert('{{%migration}}',['version'=>'m190729_021703_common_log','apply_time'=>'1571149412']);
        $this->insert('{{%migration}}',['version'=>'m190729_055605_common_auth_assignment','apply_time'=>'1571149412']);
        $this->insert('{{%migration}}',['version'=>'m190821_020440_common_action_behavior','apply_time'=>'1571149412']);
        $this->insert('{{%migration}}',['version'=>'m190821_022131_sys_notify_subscription_config','apply_time'=>'1571149412']);
        $this->insert('{{%migration}}',['version'=>'m190828_010629_sys_notify_pull_time','apply_time'=>'1571149412']);
        $this->insert('{{%migration}}',['version'=>'m190902_021229_member','apply_time'=>'1571149412']);
        $this->insert('{{%migration}}',['version'=>'m190902_021313_member_account','apply_time'=>'1571149412']);
        $this->insert('{{%migration}}',['version'=>'m190908_032821_wechat_form_id','apply_time'=>'1571149412']);
        $this->insert('{{%migration}}',['version'=>'m190924_041647_common_provinces','apply_time'=>'1571149422']);
        $this->insert('{{%migration}}',['version'=>'m190924_045928_common_auth_item','apply_time'=>'1571149422']);
        $this->insert('{{%migration}}',['version'=>'m190924_045928_common_auth_role','apply_time'=>'1571149422']);
        $this->insert('{{%migration}}',['version'=>'m190924_045929_common_config_cate','apply_time'=>'1571149422']);
        $this->insert('{{%migration}}',['version'=>'m190924_045929_sys_menu','apply_time'=>'1571149422']);
        $this->insert('{{%migration}}',['version'=>'m190924_045929_sys_menu_cate','apply_time'=>'1571149422']);
        $this->insert('{{%migration}}',['version'=>'m190924_091045_common_pay_log','apply_time'=>'1571149423']);
        $this->insert('{{%migration}}',['version'=>'m190924_091045_member_credits_log','apply_time'=>'1571149423']);
        
        /* 设置外键约束 */
        $this->execute('SET foreign_key_checks = 1;');
    }

    public function down()
    {
        $this->execute('SET foreign_key_checks = 0');
        /* 删除表 */
        $this->dropTable('{{%migration}}');
        $this->execute('SET foreign_key_checks = 1;');
    }
}

