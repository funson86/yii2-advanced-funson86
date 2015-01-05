<?php

use yii\db\Schema;
use yii\db\Migration;

class m140608_201405_user_init extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%user}}', [
            'id' => Schema::TYPE_PK,
            'username' => Schema::TYPE_STRING . ' NOT NULL',
            'auth_key' => Schema::TYPE_STRING . '(32) NOT NULL',
            'password_hash' => Schema::TYPE_STRING . ' NOT NULL',
            'password_reset_token' => Schema::TYPE_STRING,
            'email' => Schema::TYPE_STRING . ' NOT NULL',
            'role' => Schema::TYPE_STRING . '(64) NOT NULL DEFAULT "user"',

            'status' => Schema::TYPE_SMALLINT . ' NOT NULL DEFAULT 10',
            'created_at' => Schema::TYPE_INTEGER . ' NOT NULL',
            'updated_at' => Schema::TYPE_INTEGER . ' NOT NULL',
        ], $tableOptions);

        // Indexes
        $this->createIndex('username', '{{%user}}', 'username', true);
        $this->createIndex('role', '{{%user}}', 'role');
        $this->createIndex('status', '{{%user}}', 'status');
        $this->createIndex('created_at', '{{%user}}', 'created_at');

        // Add super administrator
        $this->execute($this->getUserSql());
    }

    /**
     * @return string SQL to insert first user
     */
    private function getUserSql()
    {
        $time = time();
        $password_hash = Yii::$app->getSecurity()->generatePasswordHash('qwe1234');
        $auth_key = Yii::$app->getSecurity()->generateRandomKey();
        return "INSERT INTO {{%user}} (`username`, `email`, `auth_key`, `password_hash`, `password_reset_token`, `role`, `status`, `created_at`, `updated_at`)
                VALUES ('admin', 'admin@demo.com', '$auth_key', '$password_hash', '', 'admin', 1, $time, $time)";
    }

    public function down()
    {
        $this->dropTable('{{%user}}');
    }
}
