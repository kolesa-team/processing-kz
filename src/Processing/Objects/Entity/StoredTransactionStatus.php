<?php
namespace Processing\Objects\Entity;

/**
 * Class represents stored transaction status.
 */
class StoredTransactionStatus
{
    /**
     * Transaction's additional information.
     *
     * @var \Processing\Objects\Entity\AdditionalInformation
     */
    protected $additionalInformation;

    /**
     * Amount user had authorised for transaction.
     *
     * @var string
     */
    protected $amountAuthorised;

    /**
     * Amount returned to user.
     *
     * @var string
     */
    protected $amountRefunded;

    /**
     * Amount requested by customer.
     *
     * @var string
     */
    protected $amountRequested;

    /**
     * Amount settled to transaction.
     *
     * @var string
     */
    protected $amountSettled;

    /**
     * Authorisation code.
     *
     * @var string
     */
    protected $authCode;

    /**
     * Goods chosen by user.
     *
     * @var \Processing\Objects\Entity\GoodsItem
     */
    protected $goods;

    /**
     * Currency code.
     *
     * @var string
     */
    protected $transactionCurrencyCode;

    /**
     * Status of transaction.
     *
     * @var string
     */
    protected $transactionStatus;

    /**
     * Set additional information.
     *
     * @param  \Processing\Objects\Entity\AdditionalInformation   $additionalInformation
     * @return \Processing\Objects\Entity\StoredTransactionStatus
     */
    public function setAdditionalInformation($additionalInformation)
    {
        $this->additionalInformation = $additionalInformation;

        return $this;
    }

    /**
     * Get additional information.
     *
     * @return \Processing\Objects\Entity\AdditionalInformation
     */
    public function getAdditionalInformation()
    {
        return $this->additionalInformation;
    }

    /**
     * Set authorised amount.
     *
     * @param  string                                             $amountAuthorised
     * @return \Processing\Objects\Entity\StoredTransactionStatus
     */
    public function setAmountAuthorised($amountAuthorised)
    {
        $this->amountAuthorised = $amountAuthorised;

        return $this;
    }

    /**
     * Get authorised amount.
     *
     * @return string
     */
    public function getAmountAuthorised()
    {
        return $this->amountAuthorised;
    }

    /**
     * Set amount refunded.
     *
     * @param  string                                             $amountRefunded
     * @return \Processing\Objects\Entity\StoredTransactionStatus
     */
    public function setAmountRefunded($amountRefunded)
    {
        $this->amountRefunded = $amountRefunded;

        return $this;
    }

    /**
     * Get amount refunded.
     *
     * @return string
     */
    public function getAmountRefunded()
    {
        return $this->amountRefunded;
    }

    /**
     * Set amount requested.
     *
     * @param  string                                             $amountRequested
     * @return \Processing\Objects\Entity\StoredTransactionStatus
     */
    public function setAmountRequested($amountRequested)
    {
        $this->amountRequested = $amountRequested;

        return $this;
    }

    /**
     * Get amount requested.
     *
     * @return string
     */
    public function getAmountRequested()
    {
        return $this->amountRequested;
    }

    /**
     * Set amount settled.
     *
     * @param  string                                             $amountSettled
     * @return \Processing\Objects\Entity\StoredTransactionStatus
     */
    public function setAmountSettled($amountSettled)
    {
        $this->amountSettled = $amountSettled;

        return $this;
    }

    /**
     * Get amount settled.
     *
     * @return string
     */
    public function getAmountSettled()
    {
        return $this->amountSettled;
    }

    /**
     * Set authorisation code.
     *
     * @param  string                                             $authCode
     * @return \Processing\Objects\Entity\StoredTransactionStatus
     */
    public function setAuthCode($authCode)
    {
        $this->authCode = $authCode;

        return $this;
    }

    /**
     * Get authorisation code.
     *
     * @return string
     */
    public function getAuthCode()
    {
        return $this->authCode;
    }

    /**
     * Set goods.
     *
     * @param  \Processing\Objects\Entity\GoodsItem               $goods
     * @return \Processing\Objects\Entity\StoredTransactionStatus
     */
    public function setGoods($goods)
    {
        $this->goods = $goods;

        return $this;
    }

    /**
     * Get goods.
     *
     * @return \Processing\Objects\Entity\GoodsItem
     */
    public function getGoods()
    {
        return $this->goods;
    }

    /**
     * Set currency code.
     *
     * @param  string                                             $transactionCurrencyCode
     * @return \Processing\Objects\Entity\StoredTransactionStatus
     */
    public function setTransactionCurrencyCode($transactionCurrencyCode)
    {
        $this->transactionCurrencyCode = $transactionCurrencyCode;

        return $this;
    }

    /**
     * Get currency code.
     *
     * @return string
     */
    public function getTransactionCurrencyCode()
    {
        return $this->transactionCurrencyCode;
    }

    /**
     * Set transaction status.
     *
     * @param  string                                             $transactionStatus
     * @return \Processing\Objects\Entity\StoredTransactionStatus
     */
    public function setTransactionStatus($transactionStatus)
    {
        $this->transactionStatus = $transactionStatus;

        return $this;
    }

    /**
     * Get transaction status.
     *
     * @return string
     */
    public function getTransactionStatus()
    {
        return $this->transactionStatus;
    }

}
