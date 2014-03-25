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
     * @see \ProcessingKz\Objects\Request\RefundTransaction::$additionalInformation
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
     * @see \ProcessingKz\Objects\Request\RefundTransaction::$additionalInformation
     *
     * @return \ProcessingKz\Objects\Entity\AdditionalInformation
     */
    public function getAdditionalInformation()
    {
        return $this->additionalInformation;
    }

    /**
     * @see \ProcessingKz\Objects\Request\RefundTransaction::$description
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
     * @see \ProcessingKz\Objects\Request\RefundTransaction::$description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @see \ProcessingKz\Objects\Request\RefundTransaction::$goodsToRefund
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
     * @see \ProcessingKz\Objects\Request\RefundTransaction::$goodsToRefund
     *
     * @return \ProcessingKz\Objects\Entity\GoodsItem
     */
    public function getGoodsToRefund()
    {
        return $this->goodsToRefund;
    }

    /**
     * @see \ProcessingKz\Objects\Request\RefundTransaction::$merchantId
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
     * @see \ProcessingKz\Objects\Request\RefundTransaction::$merchantId
     *
     * @return string
     */
    public function getMerchantId()
    {
        return $this->merchantId;
    }

    /**
     * @see \ProcessingKz\Objects\Request\RefundTransaction::$password
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
     * @see \ProcessingKz\Objects\Request\RefundTransaction::$password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @see \ProcessingKz\Objects\Request\RefundTransaction::$referenceNr
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
     * @see \ProcessingKz\Objects\Request\RefundTransaction::$referenceNr
     *
     * @return string
     */
    public function getReferenceNr()
    {
        return $this->referenceNr;
    }

    /**
     * @see \ProcessingKz\Objects\Request\RefundTransaction::$refundAmount
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
     * @see \ProcessingKz\Objects\Request\RefundTransaction::$refundAmount
     *
     * @return string
     */
    public function getRefundAmount()
    {
        return $this->refundAmount;
    }
}
