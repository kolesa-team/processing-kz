<?php
namespace Processing\Objects\Response;

abstract class Base
{
    /**
     * @var mixed
     */
    protected $return;

    /**
     * @param  mixed                             $return
     * @return \Processing\Objects\Response\Base
     */
    public function setReturn($return)
    {
        $this->return = $return;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getReturn()
    {
        return $this->return;
    }
}
