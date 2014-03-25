<?php
namespace ProcessingKz\Objects\Entity;

/**
 * Class represents goods item.
 */
class GoodsItem extends Base
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
     * @see \ProcessingKz\Objects\Entity\GoodsItem::$amount
     *
     * @param  string                                 $amount
     * @return \ProcessingKz\Objects\Entity\GoodsItem
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\GoodsItem::$amount
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\GoodsItem::$currencyCode
     *
     * @param  integer                                $currencyCode
     * @return \ProcessingKz\Objects\Entity\GoodsItem
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\GoodsItem::$currencyCode
     *
     * @return integer
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\GoodsItem::$merchantsGoodsID
     *
     * @param  string                                 $merchantsGoodsId
     * @return \ProcessingKz\Objects\Entity\GoodsItem
     */
    public function setMerchantsGoodsID($merchantsGoodsId)
    {
        $this->merchantsGoodsID = $merchantsGoodsId;

        return $this;
    }

    /**
     * G@see \ProcessingKz\Objects\Entity\GoodsItem::$merchantsGoodsID
     *
     * @return string
     */
    public function getMerchantsGoodsID()
    {
        return $this->merchantsGoodsID;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\GoodsItem::$nameOfGoods
     *
     * @param  string                                 $nameOfGoods
     * @return \ProcessingKz\Objects\Entity\GoodsItem
     */
    public function setNameOfGoods($nameOfGoods)
    {
        $this->nameOfGoods = $nameOfGoods;

        return $this;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\GoodsItem::$nameOfGoods
     *
     * @return string
     */
    public function getNameOfGoods()
    {
        return $this->nameOfGoods;
    }
}
