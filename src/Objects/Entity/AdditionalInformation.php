<?php
namespace ProcessingKz\Objects\Entity;

/**
 * Class represents additional information.
 */
class AdditionalInformation extends Base
{
    /**
     * Key.
     *
     * @var string
     */
    public $key;

    /**
     * Value.
     *
     * @var string
     */
    public $value;

    /**
     * @see \ProcessingKz\Objects\Entity\AdditionalInformation::$key
     *
     * @param  string                                             $key
     * @return \ProcessingKz\Objects\Entity\AdditionalInformation
     */
    public function setKey($key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\AdditionalInformation::$key
     *
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\AdditionalInformation::$value
     *
     * @param  string                                             $value
     * @return \ProcessingKz\Objects\Entity\AdditionalInformation
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\AdditionalInformation::$value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }
}
