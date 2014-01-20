<?php
namespace Processing\Objects\Response;

use Processing\Objects\StartTransactionResult;

class StartTransaction extends Base
{
    /**
     * {@inheritdoc}
     *
     * @param  \Processing\Objects\StartTransactionResult    $return
     * @return \Processing\Objects\Response\StartTransaction
     */
    public function setReturn(StartTransactionResult $return)
    {
        $this->return = $return;

        return $this;
    }
}
