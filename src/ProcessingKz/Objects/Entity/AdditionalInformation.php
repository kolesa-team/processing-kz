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
     * Set key.
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
     * Get key.
     *
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Set value.
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
     * Get value.
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }
}
