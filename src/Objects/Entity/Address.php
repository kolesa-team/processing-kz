<?php
namespace ProcessingKz\Objects\Entity;

/**
 * Class represents post address.
 */
class Address extends Base
{
    /**
     * First line of address.
     *
     * @var string
     */
    protected $addressLine1;

    /**
     * Second line of address.
     *
     * @var string
     */
    protected $addressLine2;

    /**
     * Address city.
     *
     * @var string
     */
    protected $city;

    /**
     * Address country.
     *
     * @var string
     */
    protected $country;

    /**
     * Address county.
     *
     * @var string
     */
    protected $county;

    /**
     * Address ZIP-code.
     *
     * @var string
     */
    protected $zip;

    /**
     * @see \ProcessingKz\Objects\Entity\Address::$addressLine1
     *
     * @param  string                               $addressLine1
     * @return \ProcessingKz\Objects\Entity\Address
     */
    public function setAddressLine1($addressLine1)
    {
        $this->addressLine1 = $addressLine1;

        return $this;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\Address::$addressLine1
     *
     * @return string
     */
    public function getAddressLine1()
    {
        return $this->addressLine1;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\Address::$addressLine2
     *
     * @param  string                               $addressLine2
     * @return \ProcessingKz\Objects\Entity\Address
     */
    public function setAddressLine2($addressLine2)
    {
        $this->addressLine2 = $addressLine2;

        return $this;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\Address::$addressLine2
     *
     * @return string
     */
    public function getAddressLine2()
    {
        return $this->addressLine2;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\Address::$city
     *
     * @param  string                               $city
     * @return \ProcessingKz\Objects\Entity\Address
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\Address::$city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\Address::$country
     *
     * @param  string                               $country
     * @return \ProcessingKz\Objects\Entity\Address
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\Address::$country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\Address::$county
     *
     * @param  string                               $county
     * @return \ProcessingKz\Objects\Entity\Address
     */
    public function setCounty($county)
    {
        $this->county = $county;

        return $this;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\Address::$county
     *
     * @return string
     */
    public function getCounty()
    {
        return $this->county;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\Address::$zip
     *
     * @param  string                               $zip
     * @return \ProcessingKz\Objects\Entity\Address
     */
    public function setZip($zip)
    {
        $this->zip = $zip;

        return $this;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\Address::$zip
     *
     * @return string
     */
    public function getZip()
    {
        return $this->zip;
    }
}
