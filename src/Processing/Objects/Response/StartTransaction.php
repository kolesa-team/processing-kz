<?php
namespace Processing\Objects\Response;

use Processing\Objects\Entity\StartTransactionResult;

class StartTransaction extends Base
{
    /**
     * {@inheritdoc}
     *
     * @param  \Processing\Objects\Entity\StartTransactionResult $return
     * @return \Processing\Objects\Response\StartTransaction
     */
    public function setReturn(StartTransactionResult $return)
    {
        $this->return = $return;

        return $this;
    }
}
