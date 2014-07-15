<?php

use yii\db\Schema;


class m100000_000001_CreateNewsTable extends \yii\db\Migration
{
    public function safeUp()
    {
        switch (Yii::$app->db->driverName) {
            case 'mysql':
                $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
                break;
            case 'pgsql':
                $tableOptions = null;
                break;
            default:
                throw new RuntimeException('Your database is not supported!');
        }

        $this->createTable('{{%news}}', [
            'id' => Schema::TYPE_PK,
            'title' => Schema::TYPE_STRING . '(255) NOT NULL',
            'image' => Schema::TYPE_INTEGER . ' NULL',
            'summary' => Schema::TYPE_TEXT,
            'content'  => schema::TYPE_TEXT,
            'created_at' => Schema::TYPE_TIMESTAMP . ' DEFAULT CURRENT_TIMESTAMP',
            'updated_at' => Schema::TYPE_DATETIME,
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%news}}');
    }
} 