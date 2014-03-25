<?php
namespace ProcessingKz\Objects\Entity;

class TransactionDetails extends Base
{
    /**
     * Billing address.
     *
     * @var \ProcessingKz\Objects\Entity\Address
     */
    protected $billingAddress;

    /**
     * Currency code.
     *
     * @var integer
     */
    protected $currencyCode;

    /**
     * Reference in customer's system.
     *
     * @var string
     */
    protected $customerReference;

    /**
     * Transaction description.
     *
     * @var string
     */
    protected $description;

    /**
     * User's goods.
     *
     * @var \ProcessingKz\Objects\Entity\GoodsItem
     */
    protected $goodsList;

    /**
     * User language.
     *
     * @var string
     */
    protected $languageCode;

    /**
     * Merchant additional information.
     *
     * @var \ProcessingKz\Objects\Entity\AdditionalInformation
     */
    protected $merchantAdditionalInformationList;

    /**
     * Merchant identifier.
     *
     * @var string
     */
    protected $merchantId;

    /**
     * URL user would be redirected to.
     *
     * @var string
     */
    protected $returnURL;

    /**
     * Terminal identifier.
     *
     * @var string
     */
    protected $terminalId;

    /**
     * Transaction amount.
     *
     * @var string
     */
    protected $totalAmount;

    /**
     * Merchant local date and time.
     *
     * @var string
     */
    protected $merchantLocalDateTime;

    /**
     * Client's name.
     *
     * @var string
     */
    protected $purchaserName;

    /**
     * Client'd phone.
     *
     * @var string
     */
    protected $purchaserPhone;

    /**
     * Client's e-mail.
     *
     * @var string
     */
    protected $purchaserEmail;

    /**
     * Order identifier.
     *
     * @var string
     */
    protected $orderId;

    /**
     * @see \ProcessingKz\Objects\Entity\TransactionDetails::$billingAddress
     *
     * @param  \ProcessingKz\Objects\Entity\Address            $billingAddress
     * @return \ProcessingKz\Objects\Entity\TransactionDetails
     */
    public function setBillingAddress(Address $billingAddress)
    {
        $this->billingAddress = $billingAddress;

        return $this;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\TransactionDetails::$billingAddress
     *
     * @return \ProcessingKz\Objects\Entity\Address
     */
    public function getBillingAddress()
    {
        return $this->billingAddress;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\TransactionDetails::$currencyCode
     *
     * @param  integer                                         $currencyCode
     * @return \ProcessingKz\Objects\Entity\TransactionDetails
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\TransactionDetails::$currencyCode
     *
     * @return integer
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\TransactionDetails::$customerReference
     *
     * @param  string                                          $customerReference
     * @return \ProcessingKz\Objects\Entity\TransactionDetails
     */
    public function setCustomerReference($customerReference)
    {
        $this->customerReference = $customerReference;

        return $this;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\TransactionDetails::$customerReference
     *
     * @return string
     */
    public function getCustomerReference()
    {
        return $this->customerReference;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\TransactionDetails::$description
     *
     * @param  string                                          $description
     * @return \ProcessingKz\Objects\Entity\TransactionDetails
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\TransactionDetails::$description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\TransactionDetails::$goodsList
     *
     * @param  \ProcessingKz\Objects\Entity\GoodsItem          $goodsList
     * @return \ProcessingKz\Objects\Entity\TransactionDetails
     */
    public function setGoodsList(GoodsItem $goodsList)
    {
        $this->goodsList = $goodsList;

        return $this;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\TransactionDetails::$goodsList
     *
     * @return \ProcessingKz\Objects\Entity\GoodsItem
     */
    public function getGoodsList()
    {
        return $this->goodsList;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\TransactionDetails::$languageCode
     *
     * @param  string                                          $languageCode
     * @return \ProcessingKz\Objects\Entity\TransactionDetails
     */
    public function setLanguageCode($languageCode)
    {
        $this->languageCode = $languageCode;

        return $this;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\TransactionDetails::$languageCode
     *
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->languageCode;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\TransactionDetails::$merchantAdditionalInformationList
     *
     * @param  \ProcessingKz\Objects\Entity\AdditionalInformation $merchantAdditionalInformationList
     * @return \ProcessingKz\Objects\Entity\TransactionDetails
     */
    public function setMerchantAdditionalInformationList(AdditionalInformation $merchantAdditionalInformationList)
    {
        $this->merchantAdditionalInformationList = $merchantAdditionalInformationList;

        return $this;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\TransactionDetails::$merchantAdditionalInformationList
     *
     * @return \ProcessingKz\Objects\Entity\AdditionalInformation
     */
    public function getMerchantAdditionalInformationList()
    {
        return $this->merchantAdditionalInformationList;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\TransactionDetails::$merchantId
     *
     * @param  string                                          $merchantId
     * @return \ProcessingKz\Objects\Entity\TransactionDetails
     */
    public function setMerchantId($merchantId)
    {
        $this->merchantId = $merchantId;

        return $this;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\TransactionDetails::$merchantId
     *
     * @return string
     */
    public function getMerchantId()
    {
        return $this->merchantId;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\TransactionDetails::$merchantLocalDateTime
     *
     * @param  string                                          $merchantLocalDateTime
     * @return \ProcessingKz\Objects\Entity\TransactionDetails
     */
    public function setMerchantLocalDateTime($merchantLocalDateTime)
    {
        $this->merchantLocalDateTime = $merchantLocalDateTime;

        return $this;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\TransactionDetails::$merchantLocalDateTime
     *
     * @return string
     */
    public function getMerchantLocalDateTime()
    {
        return $this->merchantLocalDateTime;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\TransactionDetails::$orderId
     *
     * @param  string                                          $orderId
     * @return \ProcessingKz\Objects\Entity\TransactionDetails
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\TransactionDetails::$orderId
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\TransactionDetails::$purchaserEmail
     *
     * @param  string                                          $purchaserEmail
     * @return \ProcessingKz\Objects\Entity\TransactionDetails
     */
    public function setPurchaserEmail($purchaserEmail)
    {
        $this->purchaserEmail = $purchaserEmail;

        return $this;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\TransactionDetails::$purchaserEmail
     *
     * @return string
     */
    public function getPurchaserEmail()
    {
        return $this->purchaserEmail;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\TransactionDetails::$purchaserName
     *
     * @param  string                                          $purchaserName
     * @return \ProcessingKz\Objects\Entity\TransactionDetails
     */
    public function setPurchaserName($purchaserName)
    {
        $this->purchaserName = $purchaserName;

        return $this;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\TransactionDetails::$purchaserName
     *
     * @return string
     */
    public function getPurchaserName()
    {
        return $this->purchaserName;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\TransactionDetails::$purchaserPhone
     *
     * @param  string                                          $purchaserPhone
     * @return \ProcessingKz\Objects\Entity\TransactionDetails
     */
    public function setPurchaserPhone($purchaserPhone)
    {
        $this->purchaserPhone = $purchaserPhone;

        return $this;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\TransactionDetails::$purchaserPhone
     *
     * @return string
     */
    public function getPurchaserPhone()
    {
        return $this->purchaserPhone;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\TransactionDetails::$returnURL
     *
     * @param  string                                          $returnURL
     * @return \ProcessingKz\Objects\Entity\TransactionDetails
     */
    public function setReturnURL($returnURL)
    {
        $this->returnURL = $returnURL;

        return $this;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\TransactionDetails::$returnURL
     *
     * @return string
     */
    public function getReturnURL()
    {
        return $this->returnURL;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\TransactionDetails::$terminalId
     *
     * @param  string                                          $terminalId
     * @return \ProcessingKz\Objects\Entity\TransactionDetails
     */
    public function setTerminalId($terminalId)
    {
        $this->terminalId = $terminalId;

        return $this;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\TransactionDetails::$terminalId
     *
     * @return string
     */
    public function getTerminalId()
    {
        return $this->terminalId;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\TransactionDetails::$totalAmount
     *
     * @param  string                                          $totalAmount
     * @return \ProcessingKz\Objects\Entity\TransactionDetails
     */
    public function setTotalAmount($totalAmount)
    {
        $this->totalAmount = $totalAmount;

        return $this;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\TransactionDetails::$totalAmount
     *
     * @return string
     */
    public function getTotalAmount()
    {
        return $this->totalAmount;
    }
}
