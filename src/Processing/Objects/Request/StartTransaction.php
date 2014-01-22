<?php
namespace Processing\Objects\Request;

/**
 * Start transaction request.
 */
class StartTransaction extends Base
{
    /**
     * Transaction details.
     *
     * @var \Processing\Objects\Entity\TransactionDetails
     */
    protected $transaction;

    /**
     * Set transaction details.
     *
     * @param  \Processing\Objects\Entity\TransactionDetails $transaction
     * @return \Processing\Objects\Request\StartTransaction
     */
    public function setTransaction($transaction)
    {
        $this->transaction = $transaction;

        return $this;
    }

    /**
     * Get transaction details.
     *
     * @return \Processing\Objects\Entity\TransactionDetails
     */
    public function getTransaction()
    {
        return $this->transaction;
    }
}
