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
     * Set billing address.
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
     * Get billing address.
     *
     * @return \ProcessingKz\Objects\Entity\Address
     */
    public function getBillingAddress()
    {
        return $this->billingAddress;
    }

    /**
     * Set currency code.
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
     * Get currency code.
     *
     * @return integer
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Set customer reference.
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
     * Get customer reference.
     *
     * @return string
     */
    public function getCustomerReference()
    {
        return $this->customerReference;
    }

    /**
     * Set transaction description.
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
     * Get transaction description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set goods.
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
     * Get goods.
     *
     * @return \ProcessingKz\Objects\Entity\GoodsItem
     */
    public function getGoodsList()
    {
        return $this->goodsList;
    }

    /**
     * Set language code.
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
     * Get language code.
     *
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->languageCode;
    }

    /**
     * Set merchant additional information.
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
     * Get merchant additional information.
     *
     * @return \ProcessingKz\Objects\Entity\AdditionalInformation
     */
    public function getMerchantAdditionalInformationList()
    {
        return $this->merchantAdditionalInformationList;
    }

    /**
     * Set merchant identifier.
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
     * Get merchant identifier.
     *
     * @return string
     */
    public function getMerchantId()
    {
        return $this->merchantId;
    }

    /**
     * Set merchant local date and time.
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
     * Get merchant local date and time.
     *
     * @return string
     */
    public function getMerchantLocalDateTime()
    {
        return $this->merchantLocalDateTime;
    }

    /**
     * Set order identifier.
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
     * Get order identifier.
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * Set client e-mail.
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
     * Get client e-mail.
     *
     * @return string
     */
    public function getPurchaserEmail()
    {
        return $this->purchaserEmail;
    }

    /**
     * Set client name.
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
     * Get client name.
     *
     * @return string
     */
    public function getPurchaserName()
    {
        return $this->purchaserName;
    }

    /**
     * Set client phone.
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
     * Get client phone.
     *
     * @return string
     */
    public function getPurchaserPhone()
    {
        return $this->purchaserPhone;
    }

    /**
     * Set return URL.
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
     * Get return URL.
     *
     * @return string
     */
    public function getReturnURL()
    {
        return $this->returnURL;
    }

    /**
     * Set terminal identifier.
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
     * Get terminal identifier.
     *
     * @return string
     */
    public function getTerminalId()
    {
        return $this->terminalId;
    }

    /**
     * Set transaction amount.
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
     * Get transaction amount.
     *
     * @return string
     */
    public function getTotalAmount()
    {
        return $this->totalAmount;
    }
}
