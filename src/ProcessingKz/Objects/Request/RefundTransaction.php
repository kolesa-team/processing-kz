<?php
namespace ProcessingKz\Objects\Request;

/**
 * Refund transaction request.
 */
class RefundTransaction extends Base
{
    /**
     * Merchant identifier.
     *
     * @var string
     */
    protected $merchantId;

    /**
     * Password.
     *
     * @var string
     */
    protected $password;

    /**
     * Reference number.
     *
     * @var string
     */
    protected $referenceNr;

    /**
     * Refund amount.
     *
     * @var string
     */
    protected $refundAmount;

    /**
     * Transaction description.
     *
     * @var string
     */
    protected $description;

    /**
     * Goods to refund.
     *
     * @var \ProcessingKz\Objects\Entity\GoodsItem
     */
    protected $goodsToRefund;

    /**
     * Transaction additional information.
     *
     * @var \ProcessingKz\Objects\Entity\AdditionalInformation
     */
    protected $additionalInformation;

    /**
     * Set additional information.
     *
     * @param  \ProcessingKz\Objects\Entity\AdditionalInformation $additionalInformation
     * @return \ProcessingKz\Objects\Request\RefundTransaction
     */
    public function setAdditionalInformation($additionalInformation)
    {
        $this->additionalInformation = $additionalInformation;

        return $this;
    }

    /**
     * Get additional information.
     *
     * @return \ProcessingKz\Objects\Entity\AdditionalInformation
     */
    public function getAdditionalInformation()
    {
        return $this->additionalInformation;
    }

    /**
     * Set transaction description.
     *
     * @param  string                                          $description
     * @return \ProcessingKz\Objects\Request\RefundTransaction
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get transaction description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set goods to refund.
     *
     * @param  \ProcessingKz\Objects\Entity\GoodsItem          $goodsToRefund
     * @return \ProcessingKz\Objects\Request\RefundTransaction
     */
    public function setGoodsToRefund($goodsToRefund)
    {
        $this->goodsToRefund = $goodsToRefund;

        return $this;
    }

    /**
     * Get goods to refund.
     *
     * @return \ProcessingKz\Objects\Entity\GoodsItem
     */
    public function getGoodsToRefund()
    {
        return $this->goodsToRefund;
    }

    /**
     * Set merchant identifier.
     *
     * @param  string                                          $merchantId
     * @return \ProcessingKz\Objects\Request\RefundTransaction
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
     * Set password.
     *
     * @param  string                                          $password
     * @return \ProcessingKz\Objects\Request\RefundTransaction
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password.
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set reference number.
     *
     * @param  string                                          $referenceNr
     * @return \ProcessingKz\Objects\Request\RefundTransaction
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
     * Set amount to refund.
     *
     * @param  string                                          $refundAmount
     * @return \ProcessingKz\Objects\Request\RefundTransaction
     */
    public function setRefundAmount($refundAmount)
    {
        $this->refundAmount = $refundAmount;

        return $this;
    }

    /**
     * Get amount to refund.
     *
     * @return string
     */
    public function getRefundAmount()
    {
        return $this->refundAmount;
    }
}
