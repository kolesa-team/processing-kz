<?php
namespace ProcessingKz\Objects\Entity;

/**
 * Class represents stored transaction status.
 */
class StoredTransactionStatus extends Base
{
    /**
     * Transaction not found.
     */
    const NO_SUCH_TRANSACTION = 'NO_SUCH_TRANSACTION';

    /**
     * Waiting for purchaser input.
     */
    const PENDING_CUSTOMER_INPUT = 'PENDING_CUSTOMER_INPUT';

    /**
     * Waiting bank to authorise transaction.
     */
    const PENDING_AUTH_RESULT = 'PENDING_AUTH_RESULT';

    /**
     * Bank had authorised transaction and blocked amount.
     */
    const AUTHORISED = 'AUTHORISED';

    /**
     * Bank declined request.
     */
    const DECLINED = 'DECLINED';

    /**
     * Authorisation reversed.
     */
    const REVERSED = 'REVERSED';

    /**
     * Transaction paid.
     */
    const PAID = 'PAID';

    /**
     * Transaction refunded.
     */
    const REFUNDED = 'REFUNDED';

    /**
     * Provided MID is invalid.
     */
    const INVALID_MID = 'INVALID_MID';

    /**
     * Provided MID is disabled.
     */
    const MID_DISABLED = 'MID_DISABLED';

    /**
     * Transaction's additional information.
     *
     * @var \ProcessingKz\Objects\Entity\AdditionalInformation
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
     * @var \ProcessingKz\Objects\Entity\GoodsItem
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
     * Order id.
     *
     * @var string
     */
    protected $orderId;

    /**
     * Purchaser name.
     *
     * @var string
     */
    protected $purchaserName;

    /**
     * Purchaser email.
     *
     * @var string
     */
    protected $purchaserEmail;

    /**
     * Purchaser phone.
     *
     * @var string
     */
    protected $purchaserPhone;

    /**
     * Merchant local date and time.
     *
     * @var string
     */
    protected $merchantLocalDateTime;

    /**
     * Merchant online address;
     *
     * @var string
     */
    protected $merchantOnlineAddress;

    /**
     * @see \ProcessingKz\Objects\Entity\StoredTransactionStatus::$additionalInformation
     *
     * @param  \ProcessingKz\Objects\Entity\AdditionalInformation   $additionalInformation
     * @return \ProcessingKz\Objects\Entity\StoredTransactionStatus
     */
    public function setAdditionalInformation($additionalInformation)
    {
        $this->additionalInformation = $additionalInformation;

        return $this;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\StoredTransactionStatus::$additionalInformation
     *
     * @return \ProcessingKz\Objects\Entity\AdditionalInformation
     */
    public function getAdditionalInformation()
    {
        return $this->additionalInformation;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\StoredTransactionStatus::$amountAuthorised
     *
     * @param  string                                               $amountAuthorised
     * @return \ProcessingKz\Objects\Entity\StoredTransactionStatus
     */
    public function setAmountAuthorised($amountAuthorised)
    {
        $this->amountAuthorised = $amountAuthorised;

        return $this;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\StoredTransactionStatus::$amountAuthorised
     *
     * @return string
     */
    public function getAmountAuthorised()
    {
        return $this->amountAuthorised;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\StoredTransactionStatus::$amountRefunded
     *
     * @param  string                                               $amountRefunded
     * @return \ProcessingKz\Objects\Entity\StoredTransactionStatus
     */
    public function setAmountRefunded($amountRefunded)
    {
        $this->amountRefunded = $amountRefunded;

        return $this;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\StoredTransactionStatus::$amountRefunded
     *
     * @return string
     */
    public function getAmountRefunded()
    {
        return $this->amountRefunded;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\StoredTransactionStatus::$amountRequested
     *
     * @param  string                                               $amountRequested
     * @return \ProcessingKz\Objects\Entity\StoredTransactionStatus
     */
    public function setAmountRequested($amountRequested)
    {
        $this->amountRequested = $amountRequested;

        return $this;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\StoredTransactionStatus::$amountRequested
     *
     * @return string
     */
    public function getAmountRequested()
    {
        return $this->amountRequested;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\StoredTransactionStatus::$amountSettled
     *
     * @param  string                                               $amountSettled
     * @return \ProcessingKz\Objects\Entity\StoredTransactionStatus
     */
    public function setAmountSettled($amountSettled)
    {
        $this->amountSettled = $amountSettled;

        return $this;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\StoredTransactionStatus::$amountSettled
     *
     * @return string
     */
    public function getAmountSettled()
    {
        return $this->amountSettled;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\StoredTransactionStatus::$authCode
     *
     * @param  string                                               $authCode
     * @return \ProcessingKz\Objects\Entity\StoredTransactionStatus
     */
    public function setAuthCode($authCode)
    {
        $this->authCode = $authCode;

        return $this;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\StoredTransactionStatus::$authCode
     *
     * @return string
     */
    public function getAuthCode()
    {
        return $this->authCode;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\StoredTransactionStatus::$goods
     *
     * @param  \ProcessingKz\Objects\Entity\GoodsItem               $goods
     * @return \ProcessingKz\Objects\Entity\StoredTransactionStatus
     */
    public function setGoods($goods)
    {
        $this->goods = $goods;

        return $this;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\StoredTransactionStatus::$goods
     *
     * @return \ProcessingKz\Objects\Entity\GoodsItem
     */
    public function getGoods()
    {
        return $this->goods;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\StoredTransactionStatus::$transactionCurrencyCode
     *
     * @param  string                                               $transactionCurrencyCode
     * @return \ProcessingKz\Objects\Entity\StoredTransactionStatus
     */
    public function setTransactionCurrencyCode($transactionCurrencyCode)
    {
        $this->transactionCurrencyCode = $transactionCurrencyCode;

        return $this;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\StoredTransactionStatus::$transactionCurrencyCode
     *
     * @return string
     */
    public function getTransactionCurrencyCode()
    {
        return $this->transactionCurrencyCode;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\StoredTransactionStatus::$transactionStatus
     *
     * @param  string                                               $transactionStatus
     * @return \ProcessingKz\Objects\Entity\StoredTransactionStatus
     */
    public function setTransactionStatus($transactionStatus)
    {
        $this->transactionStatus = $transactionStatus;

        return $this;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\StoredTransactionStatus::$transactionStatus
     *
     * @return string
     */
    public function getTransactionStatus()
    {
        return $this->transactionStatus;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\StoredTransactionStatus::$orderId
     *
     * @param  string                                               $orderId
     * @return \ProcessingKz\Objects\Entity\StoredTransactionStatus
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\StoredTransactionStatus::$orderId
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\StoredTransactionStatus::$purchaserName
     *
     * @param  string                                               $purchaserName
     * @return \ProcessingKz\Objects\Entity\StoredTransactionStatus
     */
    public function setPurchaserName($purchaserName)
    {
        $this->purchaserName = $purchaserName;

        return $this;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\StoredTransactionStatus::$purchaserName
     *
     * @return string
     */
    public function getPurchaserName()
    {
        return $this->purchaserName;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\StoredTransactionStatus::$purchaserEmail
     *
     * @param  string                                               $purchaserEmail
     * @return \ProcessingKz\Objects\Entity\StoredTransactionStatus
     */
    public function setPurchaserEmail($purchaserEmail)
    {
        $this->purchaserEmail = $purchaserEmail;

        return $this;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\StoredTransactionStatus::$purchaserEmail
     *
     * @return string
     */
    public function getPurchaserEmail()
    {
        return $this->purchaserEmail;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\StoredTransactionStatus::$purchaserPhone
     *
     * @param  string                                               $purchaserPhone
     * @return \ProcessingKz\Objects\Entity\StoredTransactionStatus
     */
    public function setPurchaserPhone($purchaserPhone)
    {
        $this->purchaserPhone = $purchaserPhone;

        return $this;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\StoredTransactionStatus::$purchaserPhone
     *
     * @return string
     */
    public function getPurchaserPhone()
    {
        return $this->purchaserPhone;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\StoredTransactionStatus::$merchantLocalDateTime
     *
     * @param  string                                               $merchantLocalDateTime
     * @return \ProcessingKz\Objects\Entity\StoredTransactionStatus
     */
    public function setMerchantLocalDateTime($merchantLocalDateTime)
    {
        $this->merchantLocalDateTime = $merchantLocalDateTime;

        return $this;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\StoredTransactionStatus::$merchantLocalDateTime
     *
     * @return string
     */
    public function getMerchantLocalDateTime()
    {
        return $this->merchantLocalDateTime;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\StoredTransactionStatus::$merchantOnlineAddress
     *
     * @param  string                                               $merchantOnlineAddress
     * @return \ProcessingKz\Objects\Entity\StoredTransactionStatus
     */
    public function setMerchantOnlineAddress($merchantOnlineAddress)
    {
        $this->merchantOnlineAddress = $merchantOnlineAddress;

        return $this;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\StoredTransactionStatus::$merchantOnlineAddress
     *
     * @return string
     */
    public function getMerchantOnlineAddress()
    {
        return $this->merchantOnlineAddress;
    }
}
