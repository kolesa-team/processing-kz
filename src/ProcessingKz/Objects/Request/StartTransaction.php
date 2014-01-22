<?php
namespace ProcessingKz\Objects\Request;

/**
 * Start transaction request.
 */
class StartTransaction extends Base
{
    /**
     * Transaction details.
     *
     * @var \ProcessingKz\Objects\Entity\TransactionDetails
     */
    protected $transaction;

    /**
     * Set transaction details.
     *
     * @param  \ProcessingKz\Objects\Entity\TransactionDetails $transaction
     * @return \ProcessingKz\Objects\Request\StartTransaction
     */
    public function setTransaction($transaction)
    {
        $this->transaction = $transaction;

        return $this;
    }

    /**
     * Get transaction details.
     *
     * @return \ProcessingKz\Objects\Entity\TransactionDetails
     */
    public function getTransaction()
    {
        return $this->transaction;
    }
}
