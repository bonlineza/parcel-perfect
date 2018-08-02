<?php
namespace ParcelPerfect\Entities;


class QuoteRate
{
  protected $service;
  protected $name;
  protected $charge;
  protected $insurance;
  protected $customsValue;
  protected $outly;
  protected $doc;
  protected $handling;
  protected $cursurCharge;
  protected $totalSurcharge;
  protected $subtotal;
  protected $vat;
  protected $total;
  protected $customDuties;
  protected $dueDate;
  protected $dueTime;
  protected $customsVat;

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
  public function getName()
  {
    return $this->name;
  }

  /**
   * @return mixed
   */
  public function getCharge()
  {
    return $this->charge;
  }

  /**
   * @return mixed
   */
  public function getInsurance()
  {
    return $this->insurance;
  }

  /**
   * @return mixed
   */
  public function getCustomsValue()
  {
    return $this->customsValue;
  }

  /**
   * @return mixed
   */
  public function getOutly()
  {
    return $this->outly;
  }

  /**
   * @return mixed
   */
  public function getDoc()
  {
    return $this->doc;
  }

  /**
   * @return mixed
   */
  public function getHandling()
  {
    return $this->handling;
  }

  /**
   * @return mixed
   */
  public function getCursurCharge()
  {
    return $this->cursurCharge;
  }

  /**
   * @return mixed
   */
  public function getTotalSurcharge()
  {
    return $this->totalSurcharge;
  }

  /**
   * @return mixed
   */
  public function getSubtotal()
  {
    return $this->subtotal;
  }

  /**
   * @return mixed
   */
  public function getVat()
  {
    return $this->vat;
  }

  /**
   * @return mixed
   */
  public function getTotal()
  {
    return $this->total;
  }

  /**
   * @return mixed
   */
  public function getCustomDuties()
  {
    return $this->customDuties;
  }

  /**
   * @return mixed
   */
  public function getDueDate()
  {
    return $this->dueDate;
  }

  /**
   * @return mixed
   */
  public function getDueTime()
  {
    return $this->dueTime;
  }

  /**
   * @return mixed
   */
  public function getCustomsVat()
  {
    return $this->customsVat;
  }

  /**
   * QuoteRate constructor.
   */
  public function __construct() {
  }

  /**
   * @param mixed $service
   * @return QuoteRate
   */
  public function setService($service)
  {
    $this->service = $service;
    return $this;
  }

  /**
   * @param mixed $name
   * @return QuoteRate
   */
  public function setName($name)
  {
    $this->name = $name;
    return $this;
  }

  /**
   * @param mixed $charge
   * @return QuoteRate
   */
  public function setCharge($charge)
  {
    $this->charge = $charge;
    return $this;
  }

  /**
   * @param mixed $insurance
   * @return QuoteRate
   */
  public function setInsurance($insurance)
  {
    $this->insurance = $insurance;
    return $this;
  }

  /**
   * @param mixed $customsValue
   * @return QuoteRate
   */
  public function setCustomsValue($customsValue)
  {
    $this->customsValue = $customsValue;
    return $this;
  }

  /**
   * @param mixed $outly
   * @return QuoteRate
   */
  public function setOutly($outly)
  {
    $this->outly = $outly;
    return $this;
  }

  /**
   * @param mixed $doc
   * @return QuoteRate
   */
  public function setDoc($doc)
  {
    $this->doc = $doc;
    return $this;
  }

  /**
   * @param mixed $handling
   * @return QuoteRate
   */
  public function setHandling($handling)
  {
    $this->handling = $handling;
    return $this;
  }

  /**
   * @param mixed $cursurCharge
   * @return QuoteRate
   */
  public function setCursurCharge($cursurCharge)
  {
    $this->cursurCharge = $cursurCharge;
    return $this;
  }

  /**
   * @param mixed $totalSurcharge
   * @return QuoteRate
   */
  public function setTotalSurcharge($totalSurcharge)
  {
    $this->totalSurcharge = $totalSurcharge;
    return $this;
  }

  /**
   * @param mixed $subtotal
   * @return QuoteRate
   */
  public function setSubtotal($subtotal)
  {
    $this->subtotal = $subtotal;
    return $this;
  }

  /**
   * @param mixed $vat
   * @return QuoteRate
   */
  public function setVat($vat)
  {
    $this->vat = $vat;
    return $this;
  }

  /**
   * @param mixed $total
   * @return QuoteRate
   */
  public function setTotal($total)
  {
    $this->total = $total;
    return $this;
  }

  /**
   * @param mixed $customDuties
   * @return QuoteRate
   */
  public function setCustomDuties($customDuties)
  {
    $this->customDuties = $customDuties;
    return $this;
  }

  /**
   * @param mixed $dueDate
   * @return QuoteRate
   */
  public function setDueDate($dueDate)
  {
    $this->dueDate = $dueDate;
    return $this;
  }

  /**
   * @param mixed $dueTime
   * @return QuoteRate
   */
  public function setDueTime($dueTime)
  {
    $this->dueTime = $dueTime;
    return $this;
  }

  /**
   * @param mixed $customsVat
   * @return QuoteRate
   */
  public function setCustomsVat($customsVat)
  {
    $this->customsVat = $customsVat;
    return $this;
  }


}