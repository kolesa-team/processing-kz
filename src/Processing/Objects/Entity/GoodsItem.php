<?php
namespace Processing\Objects\Entity;

/**
 * Class represents goods item.
 */
class GoodsItem
{
    /**
     * Amount of goods.
     *
     * @var string
     */
    protected $amount;

    /**
     * Currency code.
     *
     * @var integer
     */
    protected $currencyCode;

    /**
     * Merchant's goods identifier.
     *
     * @var string
     */
    protected $merchantsGoodsID;

    /**
     * Name of goods.
     *
     * @var string
     */
    protected $nameOfGoods;

    /**
     * Set amount of goods.
     *
     * @param $amount
     * @return \Processing\Objects\Entity\GoodsItem
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount of goods.
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set currency code.
     *
     * @param $currencyCode
     * @return \Processing\Objects\Entity\GoodsItem
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
     * Set merchant's goods identifier.
     *
     * @param $merchantsGoodsId
     * @return \Processing\Objects\Entity\GoodsItem
     */
    public function setMerchantsGoodsID($merchantsGoodsId)
    {
        $this->merchantsGoodsID = $merchantsGoodsId;

        return $this;
    }

    /**
     * Get merchant's goods identifier.
     *
     * @return string
     */
    public function getMerchantsGoodsID()
    {
        return $this->merchantsGoodsID;
    }

    /**
     * Set name of goods.
     *
     * @param $nameOfGoods
     * @return \Processing\Objects\Entity\GoodsItem
     */
    public function setNameOfGoods($nameOfGoods)
    {
        $this->nameOfGoods = $nameOfGoods;

        return $this;
    }

    /**
     * Get name of goods.
     *
     * @return string
     */
    public function getNameOfGoods()
    {
        return $this->nameOfGoods;
    }
}
