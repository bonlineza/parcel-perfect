<?php
namespace ParcelPerfect\Entities;


class PackageAddress
{
    protected $contactName;
    protected $addressLineOne;
    protected $addressLineTwo;
    protected $addressLineThree;
    protected $addressLineFour;
    protected $placeId;
    protected $town;
    protected $postalCode;
    protected $contact;
    protected $phoneNumber;
    protected $alternativePhoneNumber;
    protected $cellphone;

    /**
     * QuoteLocation constructor.
     */
    public function __construct() {

    }


    /**
     * @param mixed $contactName
     * @return PackageAddress
     */
    public function setContactName($contactName)
    {
        $this->contactName = $contactName;
        return $this;
    }

    /**
     * @param mixed $addressLineOne
     * @return PackageAddress
     */
    public function setAddressLineOne($addressLineOne)
    {
        $this->addressLineOne = $addressLineOne;
        return $this;
    }

    /**
     * @param mixed $addressLineTwo
     * @return PackageAddress
     */
    public function setAddressLineTwo($addressLineTwo)
    {
        $this->addressLineTwo = $addressLineTwo;
        return $this;
    }

    /**
     * @param mixed $addressLineThree
     * @return PackageAddress
     */
    public function setAddressLineThree($addressLineThree)
    {
        $this->addressLineThree = $addressLineThree;
        return $this;
    }

    /**
     * @param mixed $addressLineFour
     * @return PackageAddress
     */
    public function setAddressLineFour($addressLineFour)
    {
        $this->addressLineFour = $addressLineFour;
        return $this;
    }

    /**
     * @param int $placeId
     * @return PackageAddress
     */
    public function setPlaceId($placeId)
    {
        $this->placeId = $placeId;
        return $this;
    }

    /**
     * @param mixed $town
     * @return PackageAddress
     */
    public function setTown($town)
    {
        $this->town = $town;
        return $this;
    }

    /**
     * @param mixed $postalCode
     * @return PackageAddress
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
        return $this;
    }

    /**
     * @param mixed $contact
     * @return PackageAddress
     */
    public function setContact($contact)
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * @param mixed $phoneNumber
     * @return PackageAddress
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * @param mixed $alternativePhoneNumber
     * @return PackageAddress
     */
    public function setAlternativePhoneNumber($alternativePhoneNumber)
    {
        $this->alternativePhoneNumber = $alternativePhoneNumber;
        return $this;
    }

    /**
     * @param mixed $cellphone
     * @return PackageAddress
     */
    public function setCellphone($cellphone)
    {
        $this->cellphone = $cellphone;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getContactName()
    {
        return $this->contactName;
    }

    /**
     * @return mixed
     */
    public function getAddressLineOne()
    {
        return $this->addressLineOne;
    }

    /**
     * @return mixed
     */
    public function getAddressLineTwo()
    {
        return $this->addressLineTwo;
    }

    /**
     * @return mixed
     */
    public function getAddressLineThree()
    {
        return $this->addressLineThree;
    }

    /**
     * @return mixed
     */
    public function getAddressLineFour()
    {
        return $this->addressLineFour;
    }

    /**
     * @return mixed
     */
    public function getPlaceId()
    {
        return $this->placeId;
    }

    /**
     * @return mixed
     */
    public function getTown()
    {
        return $this->town;
    }

    /**
     * @return mixed
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * @return mixed
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @return mixed
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @return mixed
     */
    public function getAlternativePhoneNumber()
    {
        return $this->alternativePhoneNumber;
    }

    /**
     * @return mixed
     */
    public function getCellphone()
    {
        return $this->cellphone;
    }
}