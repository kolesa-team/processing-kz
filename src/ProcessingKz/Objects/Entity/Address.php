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
     * Set first line of address.
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
     * Get first line of address.
     *
     * @return string
     */
    public function getAddressLine1()
    {
        return $this->addressLine1;
    }

    /**
     * Set second line of address.
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
     * Get second line of address.
     *
     * @return string
     */
    public function getAddressLine2()
    {
        return $this->addressLine2;
    }

    /**
     * Set city.
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
     * Get city.
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set country.
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
     * Get country.
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set county.
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
     * Get county.
     *
     * @return string
     */
    public function getCounty()
    {
        return $this->county;
    }

    /**
     * Set ZIP-code.
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
     * Get ZIP-code.
     *
     * @return string
     */
    public function getZip()
    {
        return $this->zip;
    }
}
