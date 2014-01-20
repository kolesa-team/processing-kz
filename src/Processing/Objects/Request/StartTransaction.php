<?php
namespace Processing\Objects\Request;

class StartTransaction extends Base
{
    /**
     * @var \Processing\Objects\TransactionDetails
     */
    protected $transaction;

    /**
     * @param  \Processing\Objects\TransactionDetails       $transaction
     * @return \Processing\Objects\Request\StartTransaction
     */
    public function setTransaction($transaction)
    {
        $this->transaction = $transaction;

        return $this;
    }

    /**
     * @return \Processing\Objects\TransactionDetails
     */
    public function getTransaction()
    {
        return $this->transaction;
    }

}
