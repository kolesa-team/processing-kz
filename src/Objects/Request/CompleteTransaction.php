<?php
namespace ProcessingKz\Objects\Request;

/**
 * Complete transaction request.
 */
class CompleteTransaction extends Base
{
    /**
     * Merchant identifier.
     *
     * @var string
     */
    protected $merchantId;

    /**
     * Reference number.
     *
     * @var string
     */
    protected $referenceNr;

    /**
     * Success status.
     *
     * @var boolean
     */
    protected $transactionSuccess;

    /**
     * Override amount.
     *
     * @var string
     */
    protected $overrideAmount;

    /**
     * @see \ProcessingKz\Objects\Request\CompleteTransaction::$merchantId
     *
     * @param  string                                            $merchantId
     * @return \ProcessingKz\Objects\Request\CompleteTransaction
     */
    public function setMerchantId($merchantId)
    {
        $this->merchantId = $merchantId;

        return $this;
    }

    /**
     * @see \ProcessingKz\Objects\Request\CompleteTransaction::$merchantId
     *
     * @return string
     */
    public function getMerchantId()
    {
        return $this->merchantId;
    }

    /**
     * @see \ProcessingKz\Objects\Request\CompleteTransaction::$overrideAmount
     *
     * @param  string                                            $overrideAmount
     * @return \ProcessingKz\Objects\Request\CompleteTransaction
     */
    public function setOverrideAmount($overrideAmount)
    {
        $this->overrideAmount = $overrideAmount;

        return $this;
    }

    /**
     * @see \ProcessingKz\Objects\Request\CompleteTransaction::$overrideAmount
     *
     * @return string
     */
    public function getOverrideAmount()
    {
        return $this->overrideAmount;
    }

    /**
     * @see \ProcessingKz\Objects\Request\CompleteTransaction::$referenceNr
     *
     * @param  string                                            $referenceNr
     * @return \ProcessingKz\Objects\Request\CompleteTransaction
     */
    public function setReferenceNr($referenceNr)
    {
        $this->referenceNr = $referenceNr;

        return $this;
    }

    /**
     * @see \ProcessingKz\Objects\Request\CompleteTransaction::$referenceNr
     *
     * @return string
     */
    public function getReferenceNr()
    {
        return $this->referenceNr;
    }

    /**
     * @see \ProcessingKz\Objects\Request\CompleteTransaction::$tansactionSuccess
     *
     * @param  boolean                                           $transactionSuccess
     * @return \ProcessingKz\Objects\Request\CompleteTransaction
     */
    public function setTransactionSuccess($transactionSuccess)
    {
        $this->transactionSuccess = $transactionSuccess;

        return $this;
    }

    /**
     * @see \ProcessingKz\Objects\Request\CompleteTransaction::$transactionSuccess
     *
     * @return boolean
     */
    public function getTransactionSuccess()
    {
        return $this->transactionSuccess;
    }
}
