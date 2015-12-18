<?php
namespace Tests;

use ProcessingKz\Client;
use ProcessingKz\Objects\Request;

class ClientTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \ProcessingKz\Client
     */
    protected $client;

    /**
     * {@inheritdoc}
     */
    public function setUp()
    {
        $this->client = new Client();
    }

    /**
     * Test SOAP-call.
     *
     * @dataProvider provideData
     */
    public function testCall($expected, $method, $arguments)
    {
        $result = call_user_func_array(array($this->client, $method), $arguments);

        $this->assertInstanceOf($expected, $result);
    }

    /**
     * Data-provider for test.
     *
     * @return array
     */
    public function provideData()
    {
        return array(
            array(
                '\\ProcessingKz\\Objects\\Response\\GetVersion',
                'getVersion',
                array(),
            ),
//            array(
//                '\\ProcessingKz\\Objects\\Response\\CompleteTransaction',
//                'completeTransaction',
//                array(new Request\CompleteTransaction()),
//            ),
            array(
                '\\ProcessingKz\\Objects\\Response\\StartTransaction',
                'startTransaction',
                array(new Request\StartTransaction()),
            ),
            array(
                '\\ProcessingKz\\Objects\\Response\\RefundTransaction',
                'refundTransaction',
                array(new Request\RefundTransaction()),
            ),
            array(
                '\\ProcessingKz\\Objects\\Response\\GetTransactionStatus',
                'getTransactionStatus',
                array(new Request\GetTransactionStatus()),
            ),
        );
    }
}