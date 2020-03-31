<?php
/**
 * Created by PhpStorm.
 * User: kaylv@dayuw.com
 * Date: 2018/11/1
 * Time: 16:36
 */


use QLife\ApiGateway\Logger\Application;
use QLife\ApiGateway\Logger\Foundation\Qmechat\LogPost;
use QLife\ApiGateway\Logger\Foundation\Qmechat\QmechatSearch;

class LoggerSdkTest extends \PHPUnit\Framework\TestCase
{
    private $application;

    protected function setUp()/* The :void return type declaration that should be here would cause a BC issue */
    {
        $this->application = new Application(
            [

                'response_type' => getenv('response_type'),
                'secret_id' => getenv('secret_id'),
                'secret_key' => getenv('secret_key'),
                'log' => [
                    'file' => __DIR__ . '/logs/apigateway-payment.log',
                    'level' => 'debug',
                ],
                'http' => [
                    'base_uri' => getenv('base_uri'),
                ],

            ]
        );
    }

    /**
     * 创建
     * @author kaylv@dayuw.com
     */
    public function post()
    {
        $faker = \Faker\Factory::create('zh_CN');

        $post = LogPost::make()
        ->merchant($faker->numberBetween(1,100),$faker->numberBetween(1,1000))
        ->user($faker->numberBetween(1,500), $faker->name)
        ->setTarget($faker->uuid, $faker->name, 'xx');

        $data = $this->application->logger_client->post($post)->toArray();

        var_dump($data);

        $this->assertEquals(0, $data['code']);
        }

    /**
     * 搜索
     * @author kaylv@dayuw.com
     */
    public function testsearch()
    {
        $search = QmechatSearch::make()->mchId(2);

        $data = $this->application->logger_client->search($search)->toArray();

        var_dump($data);

        $this->assertEquals(0, $data['code']);
    }

    /**
     * 获取
     * @author kaylv@dayuw.com
     */
    public function get()
    {

        $data = $this->application->logger_client->get(1)->toArray();

        var_dump($data);

        $this->assertEquals(0, $data['code']);
    }
}