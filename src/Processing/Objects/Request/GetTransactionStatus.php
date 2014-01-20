<?php
namespace Processing\Objects\Request;

class GetTransactionStatus extends Base
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
     * @param  string                                           $merchantId
     * @return \Processing\Objects\Request\GetTransactionStatus
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
     * @param  string                                           $referenceNr
     * @return \Processing\Objects\Request\GetTransactionStatus
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
}
