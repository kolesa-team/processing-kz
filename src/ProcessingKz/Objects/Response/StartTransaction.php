<?php
namespace ProcessingKz\Objects\Response;

use ProcessingKz\Objects\Entity\StartTransactionResult;

/**
 * Start transaction response.
 */
class StartTransaction extends Base
{
    /**
     * {@inheritdoc}
     *
     * @param  \ProcessingKz\Objects\Entity\StartTransactionResult $return
     * @return \ProcessingKz\Objects\Response\StartTransaction
     */
    public function setReturn($return)
    {
        $this->return = $return;

        return $this;
    }
}
