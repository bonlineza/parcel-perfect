<?php
namespace ParcelPerfect\Entities;

class PackageDetails
{
    protected $waybill;
    protected $accnum;
    protected $costcentre;
    protected $service;
    protected $waydate;
    protected $pickupLocation;
    protected $dropoffLocation;
    protected $duedate;
    protected $specinstruction;
    protected $reference;
    protected $insuranceflag;
    protected $instype;
    protected $declaredvalue;
    protected $nondoxflag;
    protected $currency;
    protected $customsvalue;
    protected $surchargeflag1;
    protected $surchargeflag2;
    protected $surchargeflag3;
    protected $surchargeflag4;
    protected $surchargeflag5;
    protected $surchargeflag6;
    protected $surchargeflag7;
    protected $surchargeflag8;
    protected $surchargeflag9;

    /**
     * QuoteDetails constructor.
     */
    public function __construct() {

    }

    /**
     * @param mixed $waybill
     * @return PackageDetails
     */
    public function setWaybill($waybill)
    {
        $this->waybill = $waybill;
        return $this;
    }

    /**
     * @param mixed $accnum
     * @return PackageDetails
     */
    public function setAccnum($accnum)
    {
        $this->accnum = $accnum;
        return $this;
    }

    /**
     * @param mixed $costcentre
     * @return PackageDetails
     */
    public function setCostcentre($costcentre)
    {
        $this->costcentre = $costcentre;
        return $this;
    }

    /**
     * @param mixed $service
     * @return PackageDetails
     */
    public function setService($service)
    {
        $this->service = $service;
        return $this;
    }

    /**
     * @param mixed $waydate
     * @return PackageDetails
     */
    public function setWaydate($waydate)
    {
        $this->waydate = $waydate;
        return $this;
    }

    /**
     * @param PackageAddress $pickupLocation
     * @return PackageDetails
     */
    public function setPickupLocation($pickupLocation)
    {
        $this->pickupLocation = $pickupLocation;
        return $this;
    }

    /**
     * @param PackageAddress $dropoffLocation
     * @return PackageDetails
     */
    public function setDropoffLocation($dropoffLocation)
    {
        $this->dropoffLocation = $dropoffLocation;
        return $this;
    }

    /**
     * @param mixed $duedate
     * @return PackageDetails
     */
    public function setDuedate($duedate)
    {
        $this->duedate = $duedate;
        return $this;
    }

    /**
     * @param mixed $specinstruction
     * @return PackageDetails
     */
    public function setSpecinstruction($specinstruction)
    {
        $this->specinstruction = $specinstruction;
        return $this;
    }

    /**
     * @param mixed $reference
     * @return PackageDetails
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * @param mixed $insuranceflag
     * @return PackageDetails
     */
    public function setInsuranceflag($insuranceflag)
    {
        $this->insuranceflag = $insuranceflag;
        return $this;
    }

    /**
     * @param mixed $instype
     * @return PackageDetails
     */
    public function setInstype($instype)
    {
        $this->instype = $instype;
        return $this;
    }

    /**
     * @param mixed $declaredvalue
     * @return PackageDetails
     */
    public function setDeclaredvalue($declaredvalue)
    {
        $this->declaredvalue = $declaredvalue;
        return $this;
    }

    /**
     * @param mixed $nondoxflag
     * @return PackageDetails
     */
    public function setNondoxflag($nondoxflag)
    {
        $this->nondoxflag = $nondoxflag;
        return $this;
    }

    /**
     * @param mixed $currency
     * @return PackageDetails
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @param $customsvalue
     * @return PackageDetails
     */
    public function setCustomsvalue($customsvalue)
    {
        $this->customsvalue = $customsvalue;
        return $this;
    }

    /**
     * @param mixed $surchargeflag1
     * @return PackageDetails
     */
    public function setSurchargeflag1($surchargeflag1)
    {
        $this->surchargeflag1 = $surchargeflag1;
        return $this;
    }

    /**
     * @param mixed $surchargeflag2
     * @return PackageDetails
     */
    public function setSurchargeflag2($surchargeflag2)
    {
        $this->surchargeflag2 = $surchargeflag2;
        return $this;
    }

    /**
     * @param mixed $surchargeflag3
     * @return PackageDetails
     */
    public function setSurchargeflag3($surchargeflag3)
    {
        $this->surchargeflag3 = $surchargeflag3;
        return $this;
    }

    /**
     * @param mixed $surchargeflag4
     * @return PackageDetails
     */
    public function setSurchargeflag4($surchargeflag4)
    {
        $this->surchargeflag4 = $surchargeflag4;
        return $this;
    }

    /**
     * @param mixed $surchargeflag5
     * @return PackageDetails
     */
    public function setSurchargeflag5($surchargeflag5)
    {
        $this->surchargeflag5 = $surchargeflag5;
        return $this;
    }

    /**
     * @param mixed $surchargeflag6
     * @return PackageDetails
     */
    public function setSurchargeflag6($surchargeflag6)
    {
        $this->surchargeflag6 = $surchargeflag6;
        return $this;
    }

    /**
     * @param mixed $surchargeflag7
     * @return PackageDetails
     */
    public function setSurchargeflag7($surchargeflag7)
    {
        $this->surchargeflag7 = $surchargeflag7;
        return $this;
    }

    /**
     * @param mixed $surchargeflag8
     * @return PackageDetails
     */
    public function setSurchargeflag8($surchargeflag8)
    {
        $this->surchargeflag8 = $surchargeflag8;
        return $this;
    }

    /**
     * @param mixed $surchargeflag9
     * @return PackageDetails
     */
    public function setSurchargeflag9($surchargeflag9)
    {
        $this->surchargeflag9 = $surchargeflag9;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getWaybill()
    {
        return $this->waybill;
    }

    /**
     * @return mixed
     */
    public function getAccnum()
    {
        return $this->accnum;
    }

    /**
     * @return mixed
     */
    public function getCostcentre()
    {
        return $this->costcentre;
    }

    /**
     * @return mixed
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * @return mixed
     */
    public function getWaydate()
    {
        return $this->waydate;
    }

    /**
     * @return PackageAddress
     */
    public function getPickupLocation()
    {
        return $this->pickupLocation;
    }

    /**
     * @return PackageAddress
     */
    public function getDropoffLocation()
    {
        return $this->dropoffLocation;
    }

    /**
     * @return mixed
     */
    public function getDuedate()
    {
        return $this->duedate;
    }

    /**
     * @return mixed
     */
    public function getSpecinstruction()
    {
        return $this->specinstruction;
    }

    /**
     * @return mixed
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @return mixed
     */
    public function getInsuranceflag()
    {
        return $this->insuranceflag;
    }

    /**
     * @return mixed
     */
    public function getInstype()
    {
        return $this->instype;
    }

    /**
     * @return mixed
     */
    public function getDeclaredvalue()
    {
        return $this->declaredvalue;
    }

    /**
     * @return mixed
     */
    public function getNondoxflag()
    {
        return $this->nondoxflag;
    }

    /**
     * @return mixed
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @return mixed
     */
    public function getCustomsvalue()
    {
        return $this->customsvalue;
    }

    /**
     * @return mixed
     */
    public function getSurchargeflag1()
    {
        return $this->surchargeflag1;
    }

    /**
     * @return mixed
     */
    public function getSurchargeflag2()
    {
        return $this->surchargeflag2;
    }

    /**
     * @return mixed
     */
    public function getSurchargeflag3()
    {
        return $this->surchargeflag3;
    }

    /**
     * @return mixed
     */
    public function getSurchargeflag4()
    {
        return $this->surchargeflag4;
    }

    /**
     * @return mixed
     */
    public function getSurchargeflag5()
    {
        return $this->surchargeflag5;
    }

    /**
     * @return mixed
     */
    public function getSurchargeflag6()
    {
        return $this->surchargeflag6;
    }

    /**
     * @return mixed
     */
    public function getSurchargeflag7()
    {
        return $this->surchargeflag7;
    }

    /**
     * @return mixed
     */
    public function getSurchargeflag8()
    {
        return $this->surchargeflag8;
    }

    /**
     * @return mixed
     */
    public function getSurchargeflag9()
    {
        return $this->surchargeflag9;
    }

}