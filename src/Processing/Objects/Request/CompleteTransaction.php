<?php
namespace Processing\Objects\Request;

class CompleteTransaction extends Base
{
    /**
     * @var string
     */
    protected $merchantId;

    /**
     * @var string
     */
    protected $referenceNr;

    /**
     * @var boolean
     */
    protected $transactionSuccess;

    /**
     * @var string
     */
    protected $overrideAmount;

    /**
     * @param  string                                          $merchantId
     * @return \Processing\Objects\Request\CompleteTransaction
     */
    public function setMerchantId($merchantId)
    {
        $this->merchantId = $merchantId;

        return $this;
    }

    /**
     * @return string
     */
    public function getMerchantId()
    {
        return $this->merchantId;
    }

    /**
     * @param  string                                          $overrideAmount
     * @return \Processing\Objects\Request\CompleteTransaction
     */
    public function setOverrideAmount($overrideAmount)
    {
        $this->overrideAmount = $overrideAmount;

        return $this;
    }

    /**
     * @return string
     */
    public function getOverrideAmount()
    {
        return $this->overrideAmount;
    }

    /**
     * @param  string                                          $referenceNr
     * @return \Processing\Objects\Request\CompleteTransaction
     */
    public function setReferenceNr($referenceNr)
    {
        $this->referenceNr = $referenceNr;

        return $this;
    }

    /**
     * @return string
     */
    public function getReferenceNr()
    {
        return $this->referenceNr;
    }

    /**
     * @param  boolean                                         $transactionSuccess
     * @return \Processing\Objects\Request\CompleteTransaction
     */
    public function setTransactionSuccess($transactionSuccess)
    {
        $this->transactionSuccess = $transactionSuccess;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getTransactionSuccess()
    {
        return $this->transactionSuccess;
    }

}
