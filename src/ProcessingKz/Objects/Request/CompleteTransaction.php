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
     * Set merchant identifier.
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
     * Get merchant identifier.
     *
     * @return string
     */
    public function getMerchantId()
    {
        return $this->merchantId;
    }

    /**
     * Set override amount.
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
     * Get override amount.
     *
     * @return string
     */
    public function getOverrideAmount()
    {
        return $this->overrideAmount;
    }

    /**
     * Set reference number.
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
     * Get reference number.
     *
     * @return string
     */
    public function getReferenceNr()
    {
        return $this->referenceNr;
    }

    /**
     * Set success status.
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
     * Get success status.
     *
     * @return boolean
     */
    public function getTransactionSuccess()
    {
        return $this->transactionSuccess;
    }
}
