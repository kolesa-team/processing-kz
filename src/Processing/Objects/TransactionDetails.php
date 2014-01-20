<?php
namespace Processing\Objects;

class TransactionDetails
{
    /**
     * @var \Processing\Objects\Address
     */
    protected $billingAddress;

    /**
     * @var integer
     */
    protected $currencyCode;

    /**
     * @var string
     */
    protected $customerReference;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var \Processing\Objects\GoodsItem
     */
    protected $goodsList;

    /**
     * @var string
     */
    protected $languageCode;

    /**
     * @var \Processing\Objects\AdditionalInformation
     */
    protected $merchantAdditionalInformationList;

    /**
     * @var string
     */
    protected $merchantId;

    /**
     * @var string
     */
    protected $returnURL;

    /**
     * @var string
     */
    protected $terminalId;

    /**
     * @var string
     */
    protected $totalAmount;

    /**
     * @var string
     */
    protected $merchantLocalDateTime;

    /**
     * @var string
     */
    protected $purchaserName;

    /**
     * @var string
     */
    protected $purchaserPhone;

    /**
     * @var string
     */
    protected $purchaserEmail;

    /**
     * @var string
     */
    protected $orderId;

    /**
     * @param $billingAddress
     * @return \Processing\Objects\TransactionDetails
     */
    public function setBillingAddress(Address $billingAddress)
    {
        $this->billingAddress = $billingAddress;

        return $this;
    }

    /**
     * @return \Processing\Objects\Address
     */
    public function getBillingAddress()
    {
        return $this->billingAddress;
    }

    /**
     * @param $currencyCode
     * @return \Processing\Objects\TransactionDetails
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * @return int
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * @param $customerReference
     * @return \Processing\Objects\TransactionDetails
     */
    public function setCustomerReference($customerReference)
    {
        $this->customerReference = $customerReference;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerReference()
    {
        return $this->customerReference;
    }

    /**
     * @param $description
     * @return \Processing\Objects\TransactionDetails
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
     * @param $goodsList
     * @return \Processing\Objects\TransactionDetails
     */
    public function setGoodsList(GoodsItem $goodsList)
    {
        $this->goodsList = $goodsList;

        return $this;
    }

    /**
     * @return \Processing\Objects\GoodsItem
     */
    public function getGoodsList()
    {
        return $this->goodsList;
    }

    /**
     * @param $languageCode
     * @return \Processing\Objects\TransactionDetails
     */
    public function setLanguageCode($languageCode)
    {
        $this->languageCode = $languageCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->languageCode;
    }

    /**
     * @param $merchantAdditionalInformationList
     * @return \Processing\Objects\TransactionDetails
     */
    public function setMerchantAdditionalInformationList(AdditionalInformation $merchantAdditionalInformationList)
    {
        $this->merchantAdditionalInformationList = $merchantAdditionalInformationList;

        return $this;
    }

    /**
     * @return \Processing\Objects\AdditionalInformation
     */
    public function getMerchantAdditionalInformationList()
    {
        return $this->merchantAdditionalInformationList;
    }

    /**
     * @param $merchantId
     * @return \Processing\Objects\TransactionDetails
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
     * @param $merchantLocalDateTime
     * @return \Processing\Objects\TransactionDetails
     */
    public function setMerchantLocalDateTime($merchantLocalDateTime)
    {
        $this->merchantLocalDateTime = $merchantLocalDateTime;

        return $this;
    }

    /**
     * @return string
     */
    public function getMerchantLocalDateTime()
    {
        return $this->merchantLocalDateTime;
    }

    /**
     * @param $orderId
     * @return \Processing\Objects\TransactionDetails
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param $purchaserEmail
     * @return \Processing\Objects\TransactionDetails
     */
    public function setPurchaserEmail($purchaserEmail)
    {
        $this->purchaserEmail = $purchaserEmail;

        return $this;
    }

    /**
     * @return string
     */
    public function getPurchaserEmail()
    {
        return $this->purchaserEmail;
    }

    /**
     * @param $purchaserName
     * @return \Processing\Objects\TransactionDetails
     */
    public function setPurchaserName($purchaserName)
    {
        $this->purchaserName = $purchaserName;

        return $this;
    }

    /**
     * @return string
     */
    public function getPurchaserName()
    {
        return $this->purchaserName;
    }

    /**
     * @param $purchaserPhone
     * @return \Processing\Objects\TransactionDetails
     */
    public function setPurchaserPhone($purchaserPhone)
    {
        $this->purchaserPhone = $purchaserPhone;

        return $this;
    }

    /**
     * @return string
     */
    public function getPurchaserPhone()
    {
        return $this->purchaserPhone;
    }

    /**
     * @param $returnURL
     * @return \Processing\Objects\TransactionDetails
     */
    public function setReturnURL($returnURL)
    {
        $this->returnURL = $returnURL;

        return $this;
    }

    /**
     * @return string
     */
    public function getReturnURL()
    {
        return $this->returnURL;
    }

    /**
     * @param $terminalId
     * @return \Processing\Objects\TransactionDetails
     */
    public function setTerminalId($terminalId)
    {
        $this->terminalId = $terminalId;

        return $this;
    }

    /**
     * @return string
     */
    public function getTerminalId()
    {
        return $this->terminalId;
    }

    /**
     * @param $totalAmount
     * @return \Processing\Objects\TransactionDetails
     */
    public function setTotalAmount($totalAmount)
    {
        $this->totalAmount = $totalAmount;

        return $this;
    }

    /**
     * @return string
     */
    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

}
