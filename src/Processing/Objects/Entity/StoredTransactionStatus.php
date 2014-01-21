<?php
namespace Processing\Objects\Entity;

class StoredTransactionStatus
{
    /**
     * @var \Processing\Objects\Entity\AdditionalInformation
     */
    protected $additionalInformation;

    /**
     * @var string
     */
    protected $amountAuthorised;

    /**
     * @var string
     */
    protected $amountRefunded;

    /**
     * @var string
     */
    protected $amountRequested;

    /**
     * @var string
     */
    protected $amountSettled;

    /**
     * @var string
     */
    protected $authCode;

    /**
     * @var \Processing\Objects\Entity\GoodsItem
     */
    protected $goods;

    /**
     * @var string
     */
    protected $transactionCurrencyCode;

    /**
     * @var string
     */
    protected $transactionStatus;

    /**
     * @param  \Processing\Objects\Entity\AdditionalInformation   $additionalInformation
     * @return \Processing\Objects\Entity\StoredTransactionStatus
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
     * @param  string                                             $amountAuthorised
     * @return \Processing\Objects\Entity\StoredTransactionStatus
     */
    public function setAmountAuthorised($amountAuthorised)
    {
        $this->amountAuthorised = $amountAuthorised;

        return $this;
    }

    /**
     * @return string
     */
    public function getAmountAuthorised()
    {
        return $this->amountAuthorised;
    }

    /**
     * @param  string                                             $amountRefunded
     * @return \Processing\Objects\Entity\StoredTransactionStatus
     */
    public function setAmountRefunded($amountRefunded)
    {
        $this->amountRefunded = $amountRefunded;

        return $this;
    }

    /**
     * @return string
     */
    public function getAmountRefunded()
    {
        return $this->amountRefunded;
    }

    /**
     * @param  string                                             $amountRequested
     * @return \Processing\Objects\Entity\StoredTransactionStatus
     */
    public function setAmountRequested($amountRequested)
    {
        $this->amountRequested = $amountRequested;

        return $this;
    }

    /**
     * @return string
     */
    public function getAmountRequested()
    {
        return $this->amountRequested;
    }

    /**
     * @param  string                                             $amountSettled
     * @return \Processing\Objects\Entity\StoredTransactionStatus
     */
    public function setAmountSettled($amountSettled)
    {
        $this->amountSettled = $amountSettled;

        return $this;
    }

    /**
     * @return string
     */
    public function getAmountSettled()
    {
        return $this->amountSettled;
    }

    /**
     * @param  string                                             $authCode
     * @return \Processing\Objects\Entity\StoredTransactionStatus
     */
    public function setAuthCode($authCode)
    {
        $this->authCode = $authCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getAuthCode()
    {
        return $this->authCode;
    }

    /**
     * @param  \Processing\Objects\Entity\GoodsItem               $goods
     * @return \Processing\Objects\Entity\StoredTransactionStatus
     */
    public function setGoods($goods)
    {
        $this->goods = $goods;

        return $this;
    }

    /**
     * @return \Processing\Objects\Entity\GoodsItem
     */
    public function getGoods()
    {
        return $this->goods;
    }

    /**
     * @param  string                                             $transactionCurrencyCode
     * @return \Processing\Objects\Entity\StoredTransactionStatus
     */
    public function setTransactionCurrencyCode($transactionCurrencyCode)
    {
        $this->transactionCurrencyCode = $transactionCurrencyCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getTransactionCurrencyCode()
    {
        return $this->transactionCurrencyCode;
    }

    /**
     * @param  string                                             $transactionStatus
     * @return \Processing\Objects\Entity\StoredTransactionStatus
     */
    public function setTransactionStatus($transactionStatus)
    {
        $this->transactionStatus = $transactionStatus;

        return $this;
    }

    /**
     * @return string
     */
    public function getTransactionStatus()
    {
        return $this->transactionStatus;
    }

}
