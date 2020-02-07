<?php

namespace app\tests\traits;

use yii\db\Connection;

trait FakeDbTrait
{
    public function mockDb()
    {
        $config = require __DIR__ . '/../config/db_test.php';
        \Yii::$app->set(
            'db',
            new Connection($config['db'])
        );
        \Yii::$container->set(Connection::class, new Connection($config['db']));
    }
}
