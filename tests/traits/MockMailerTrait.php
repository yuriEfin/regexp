<?php

namespace app\tests\traits;

use yii\swiftmailer\Mailer;

trait MockMailerTrait
{
    /**
     * @throws \Exception
     */
    protected function mockMailer()
    {
        $mockMailer = $this->make(
            Mailer::class,
            [
                'send' => function () {
                    return true;
                },
            ]
        );
        \Yii::$app->set('mailer', $mockMailer);
    }
}
