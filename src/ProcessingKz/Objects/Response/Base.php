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
     * Set return code/status.
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
     * Get return code/status.
     *
     * @return mixed
     */
    public function getReturn()
    {
        return $this->return;
    }
}
