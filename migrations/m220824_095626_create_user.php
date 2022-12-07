<?php

use yii\db\Migration;

/**
 * Class m220824_095626_create_user
 */
class m220824_095626_create_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->batchInsert('{{%user}}', ['username', 'auth_key', 'password_hash', 'password_reset_token', 'email', 'status', 'created_at', 'updated_at', 'verification_token'],
         [
            ['admin', Yii::$app->security->generateRandomString(), Yii::$app->security->generatePasswordHash("qwert123y"), NULL, 'admin@mailinator.com', 1, 1600678029, 1600678029,  Yii::$app->security->generateRandomString() . '_' . time()]
            
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220824_095626_create_user cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220824_095626_create_user cannot be reverted.\n";

        return false;
    }
    */
}
