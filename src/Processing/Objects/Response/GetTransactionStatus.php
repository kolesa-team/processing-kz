<?php
namespace Processing\Objects\Response;

use Processing\Objects\Entity\StoredTransactionStatus;

/**
 * Get transaction status response.
 */
class GetTransactionStatus extends Base
{
    /**
     * {@inheritdoc}
     *
     * @param  \Processing\Objects\Entity\StoredTransactionStatus $return
     * @return \Processing\Objects\Response\StartTransaction
     */
    public function setReturn(StoredTransactionStatus $return)
    {
        $this->return = $return;

        return $this;
    }
}
