<?php
namespace ProcessingKz\Objects\Request;

/**
 * Get transaction status request.
 */
class GetTransactionStatus extends Base
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
     * @see \ProcessingKz\Objects\Request\GetTransactionStatus::$merchantId
     *
     * @param  string                                             $merchantId
     * @return \ProcessingKz\Objects\Request\GetTransactionStatus
     */
    public function setMerchantId($merchantId)
    {
        $this->merchantId = $merchantId;

        return $this;
    }

    /**
     * @see \ProcessingKz\Objects\Request\GetTransactionStatus::$merchantId
     *
     * @return string
     */
    public function getMerchantId()
    {
        return $this->merchantId;
    }

    /**
     * @see \ProcessingKz\Objects\Request\GetTransactionStatus::$referenceNr
     *
     * @param  string                                             $referenceNr
     * @return \ProcessingKz\Objects\Request\GetTransactionStatus
     */
    public function setReferenceNr($referenceNr)
    {
        $this->referenceNr = $referenceNr;

        return $this;
    }

    /**
     * @see \ProcessingKz\Objects\Request\GetTransactionStatus::$referenceNr
     *
     * @return string
     */
    public function getReferenceNr()
    {
        return $this->referenceNr;
    }
}
