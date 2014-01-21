<?php
namespace Processing\Objects\Entity;

class GoodsItem
{
    /**
     * @var string
     */
    protected $amount;

    /**
     * @var integer
     */
    protected $currencyCode;

    /**
     * @var string
     */
    protected $merchantsGoodsID;

    /**
     * @var string
     */
    protected $nameOfGoods;

    /**
     * @param $amount
     * @return \Processing\Objects\Entity\GoodsItem
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param $currencyCode
     * @return \Processing\Objects\Entity\GoodsItem
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * @return integer
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * @param $merchantsGoodsID
     * @return \Processing\Objects\Entity\GoodsItem
     */
    public function setMerchantsGoodsID($merchantsGoodsID)
    {
        $this->merchantsGoodsID = $merchantsGoodsID;

        return $this;
    }

    /**
     * @return string
     */
    public function getMerchantsGoodsID()
    {
        return $this->merchantsGoodsID;
    }

    /**
     * @param $nameOfGoods
     * @return \Processing\Objects\Entity\GoodsItem
     */
    public function setNameOfGoods($nameOfGoods)
    {
        $this->nameOfGoods = $nameOfGoods;

        return $this;
    }

    /**
     * @return string
     */
    public function getNameOfGoods()
    {
        return $this->nameOfGoods;
    }

}
