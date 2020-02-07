<?php namespace helpers;

use app\helpers\SmsParseHelper;
use yii\helpers\Json;

class SmsParserHelperTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    /**
     * @dataProvider provider
     */
    public function testSomeFeature($str)
    {
        $data = SmsParseHelper::parse($str);
        $count = count($data);
        $this->tester->assertEquals(3, $count, 'Actual: ' . $count . ', str: ' . $str . ', data: ' . var_export($data, true));
    }

    /**
     *
     */
    public function provider()
    {
        return Json::decode(file_get_contents(dirname(__DIR__) . '/_data/sms.json'));
    }
}
