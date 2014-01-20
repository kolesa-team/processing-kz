<?php
namespace Processing\Objects\Response;

use Processing\Objects\StoredTransactionStatus;

class GetTransactionStatus extends Base
{
    /**
     * {@inheritdoc}
     *
     * @param  \Processing\Objects\StoredTransactionStatus   $return
     * @return \Processing\Objects\Response\StartTransaction
     */
    public function setReturn(StoredTransactionStatus $return)
    {
        $this->return = $return;

        return $this;
    }
}
