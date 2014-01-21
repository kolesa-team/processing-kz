<?php
namespace Processing\Objects\Request;

class RefundTransaction extends Base
{
    /**
     * @var string
     */
    protected $merchantId;

    /**
     * @var string
     */
    protected $password;

    /**
     * @var string
     */
    protected $referenceNr;

    /**
     * @var string
     */
    protected $refundAmount;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var \Processing\Objects\Entity\GoodsItem
     */
    protected $goodsToRefund;

    /**
     * @var \Processing\Objects\Entity\AdditionalInformation
     */
    protected $additionalInformation;

    /**
     * @param  \Processing\Objects\Entity\AdditionalInformation $additionalInformation
     * @return \Processing\Objects\Request\RefundTransaction
     */
    public function setAdditionalInformation($additionalInformation)
    {
        $this->additionalInformation = $additionalInformation;

        return $this;
    }

    /**
     * @return \Processing\Objects\Entity\AdditionalInformation
     */
    public function getAdditionalInformation()
    {
        return $this->additionalInformation;
    }

    /**
     * @param  string                                        $description
     * @return \Processing\Objects\Request\RefundTransaction
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param  \Processing\Objects\Entity\GoodsItem          $goodsToRefund
     * @return \Processing\Objects\Request\RefundTransaction
     */
    public function setGoodsToRefund($goodsToRefund)
    {
        $this->goodsToRefund = $goodsToRefund;

        return $this;
    }

    /**
     * @return \Processing\Objects\Entity\GoodsItem
     */
    public function getGoodsToRefund()
    {
        return $this->goodsToRefund;
    }

    /**
     * @param  string                                        $merchantId
     * @return \Processing\Objects\Request\RefundTransaction
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
     * @param  string                                        $password
     * @return \Processing\Objects\Request\RefundTransaction
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param  string                                        $referenceNr
     * @return \Processing\Objects\Request\RefundTransaction
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
     * @param  string                                        $refundAmount
     * @return \Processing\Objects\Request\RefundTransaction
     */
    public function setRefundAmount($refundAmount)
    {
        $this->refundAmount = $refundAmount;

        return $this;
    }

    /**
     * @return string
     */
    public function getRefundAmount()
    {
        return $this->refundAmount;
    }

}
