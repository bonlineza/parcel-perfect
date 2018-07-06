<?php

namespace ParcelPerfect\Entities;


class Collection
{
    protected $collectionNumber;
    protected $actkg;
    protected $chargeMass;
    protected $waybillBase64;
    protected $labelsBase64;
    protected $waybillNumber;
    protected $genTrackingRetval;

    /**
     * @param mixed $collectionNumber
     * @return Collection
     */
    public function setCollectionNumber($collectionNumber)
    {
        $this->collectionNumber = $collectionNumber;
        return $this;
    }

    /**
     * @param mixed $actkg
     * @return Collection
     */
    public function setActkg($actkg)
    {
        $this->actkg = $actkg;
        return $this;
    }

    /**
     * @param mixed $chargeMass
     * @return Collection
     */
    public function setChargeMass($chargeMass)
    {
        $this->chargeMass = $chargeMass;
        return $this;
    }

    /**
     * @param mixed $waybillBase64
     * @return Collection
     */
    public function setWaybillBase64($waybillBase64)
    {
        $this->waybillBase64 = $waybillBase64;
        return $this;
    }

    /**
     * @param mixed $labelsBase64
     * @return Collection
     */
    public function setLabelsBase64($labelsBase64)
    {
        $this->labelsBase64 = $labelsBase64;
        return $this;
    }

    /**
     * @param mixed $waybillNumber
     * @return Collection
     */
    public function setWaybillNumber($waybillNumber)
    {
        $this->waybillNumber = $waybillNumber;
        return $this;
    }

    /**
     * @param mixed $genTrackingRetval
     * @return Collection
     */
    public function setGenTrackingRetval($genTrackingRetval)
    {
        $this->genTrackingRetval = $genTrackingRetval;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCollectionNumber()
    {
        return $this->collectionNumber;
    }

    /**
     * @return mixed
     */
    public function getActkg()
    {
        return $this->actkg;
    }

    /**
     * @return mixed
     */
    public function getChargeMass()
    {
        return $this->chargeMass;
    }

    /**
     * @return mixed
     */
    public function getWaybillBase64()
    {
        return $this->waybillBase64;
    }

    /**
     * @return mixed
     */
    public function getLabelsBase64()
    {
        return $this->labelsBase64;
    }

    /**
     * @return mixed
     */
    public function getWaybillNumber()
    {
        return $this->waybillNumber;
    }

    /**
     * @return mixed
     */
    public function getGenTrackingRetval()
    {
        return $this->genTrackingRetval;
    }
}