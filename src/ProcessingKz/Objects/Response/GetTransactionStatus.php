<?php
namespace ProcessingKz\Objects\Response;

use ProcessingKz\Objects\Entity\StoredTransactionStatus;

/**
 * Get transaction status response.
 */
class GetTransactionStatus extends Base
{
    /**
     * {@inheritdoc}
     *
     * @param  \ProcessingKz\Objects\Entity\StoredTransactionStatus $return
     * @return \ProcessingKz\Objects\Response\StartTransaction
     */
    public function setReturn($return)
    {
        $this->return = $return;

        return $this;
    }
}
