<?php
namespace Tests;

use ProcessingKz\Objects\Entity\AdditionalInformation;
use ProcessingKz\Objects\Entity\Address;
use ProcessingKz\Objects\Entity\GoodsItem;

class ObjectTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test for setters and getters.
     *
     * @dataProvider provideData
     * @param string $className
     * @param array $valMap
     */
    public function testSetGet($className, array $valMap)
    {
        $object     = new $className();
        $reflection = new \ReflectionClass($object);
        $properties = $reflection->getProperties();

        foreach ($properties as $property) {
            $property->setAccessible(true);

            $value = rand(111, 999);
            if (isset($valMap[$property->getName()])) {
                $value = $valMap[$property->getName()];
            }

            call_user_func(array($object, 'set' . ucfirst($property->getName())), $value);

            $this->assertEquals($value, $property->getValue($object));
            $this->assertEquals($value, call_user_func(array($object, 'get' . ucfirst($property->getName()))));
        }
    }

    public function testToArray()
    {
        $object = new AdditionalInformation();
        $object->setKey('test');
        $object->setValue('data');

        $result = $object->toArray();
        $this->assertInternalType('array', $result);
        $this->assertArrayHasKey('key', $result);
        $this->assertArrayHasKey('value', $result);
        $this->assertEquals($result['key'], 'test');
        $this->assertEquals($result['value'], 'data');
    }

    public function testToString()
    {
        $object = new AdditionalInformation();
        $object->setKey('test');
        $object->setValue('data');

        $result = $object->toString();
        $this->assertInternalType('string', $result);
        $this->assertEquals(json_encode(array('key' => 'test', 'value' => 'data')), $result);
    }

    /**
     * Data-provider for test.
     *
     * @return array
     */
    public function provideData()
    {
        return array(
            array('\\ProcessingKz\\Objects\\Entity\\AdditionalInformation', array()),
            array('\\ProcessingKz\\Objects\\Entity\Address', array()),
            array('\\ProcessingKz\\Objects\\Entity\GoodsItem', array()),
            array('\\ProcessingKz\\Objects\\Entity\StartTransactionResult', array()),
            array('\\ProcessingKz\\Objects\\Entity\StoredTransactionStatus', array()),
            array(
                '\\ProcessingKz\\Objects\\Entity\TransactionDetails',
                array(
                    'billingAddress'                    => new Address(),
                    'goodsList'                         => array(new GoodsItem()),
                    'merchantAdditionalInformationList' => new AdditionalInformation(),
                ),
            ),
            array('\\ProcessingKz\\Objects\\Request\\CompleteTransaction', array()),
            array('\\ProcessingKz\\Objects\\Request\GetTransactionStatus', array()),
            array('\\ProcessingKz\\Objects\\Request\GetVersion', array()),
            array('\\ProcessingKz\\Objects\\Request\RefundTransaction', array()),
            array('\\ProcessingKz\\Objects\\Request\StartTransaction', array()),
            array('\\ProcessingKz\\Objects\\Response\\CompleteTransaction', array()),
            array('\\ProcessingKz\\Objects\\Response\\GetTransactionStatus', array()),
            array('\\ProcessingKz\\Objects\\Response\\GetVersion', array()),
            array('\\ProcessingKz\\Objects\\Response\\RefundTransaction', array()),
            array('\\ProcessingKz\\Objects\\Response\\StartTransaction', array()),
        );
    }
}