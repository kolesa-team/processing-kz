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
     * Set merchant identifier.
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
     * Get merchant identifier.
     *
     * @return string
     */
    public function getMerchantId()
    {
        return $this->merchantId;
    }

    /**
     * Set reference number.
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
     * Get reference number.
     *
     * @return string
     */
    public function getReferenceNr()
    {
        return $this->referenceNr;
    }
}
