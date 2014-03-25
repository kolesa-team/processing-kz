<?php
namespace ProcessingKz\Objects\Response;

/**
 * Base response class.
 */
abstract class Base
{
    /**
     * Return code/status.
     *
     * @var mixed
     */
    protected $return;

    /**
     * @see \ProcessingKz\Objects\Response\Base::$return
     *
     * @param  mixed                               $return
     * @return \ProcessingKz\Objects\Response\Base
     */
    public function setReturn($return)
    {
        $this->return = $return;

        return $this;
    }

    /**
     * @see \ProcessingKz\Objects\Response\Base::$return
     *
     * @return mixed
     */
    public function getReturn()
    {
        return $this->return;
    }
}
