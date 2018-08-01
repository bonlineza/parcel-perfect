<?php

namespace ParcelPerfect\Entities;


class QuoteCollection
{
    protected $quoteno;
    protected $waybillno;
    protected $starttime;
    protected $endtime;
    protected $notes;
    protected $printWaybill;
    protected $printLabels;
    protected $specins;

    /**
     * @param mixed $quoteno
     * @return QuoteCollection
     */
    public function setQuoteno($quoteno)
    {
        $this->quoteno = $quoteno;
        return $this;
    }

    /**
     * @param mixed $waybillno
     * @return QuoteCollection
     */
    public function setWaybillno($waybillno)
    {
        $this->waybillno = $waybillno;
        return $this;
    }

    /**
     * @param mixed $starttime
     * @return QuoteCollection
     */
    public function setStarttime($starttime)
    {
        $this->starttime = $starttime;
        return $this;
    }

    /**
     * @param mixed $endtime
     * @return QuoteCollection
     */
    public function setEndtime($endtime)
    {
        $this->endtime = $endtime;
        return $this;
    }

    /**
     * @param mixed $notes
     * @return QuoteCollection
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;
        return $this;
    }

    /**
     * @param mixed $printWaybill
     * @return QuoteCollection
     */
    public function setPrintWaybill($printWaybill)
    {
        $this->printWaybill = $printWaybill;
        return $this;
    }

    /**
     * @param mixed $printLabels
     * @return QuoteCollection
     */
    public function setPrintLabels($printLabels)
    {
        $this->printLabels = $printLabels;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getQuoteno()
    {
        return $this->quoteno;
    }

    /**
     * @return mixed
     */
    public function getWaybillno()
    {
        return $this->waybillno;
    }

    /**
     * @return mixed
     */
    public function getStarttime()
    {
        return $this->starttime;
    }

    /**
     * @return mixed
     */
    public function getEndtime()
    {
        return $this->endtime;
    }

    /**
     * @return mixed
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * @return mixed
     */
    public function getPrintWaybill()
    {
        return $this->printWaybill;
    }

    /**
     * @return mixed
     */
    public function getPrintLabels()
    {
        return $this->printLabels;
    }

    /**
     * @return mixed
     */
    public function getSpecins()
    {
        return $this->specins;
    }

    /**
     * @param mixed $specins
     * @return QuoteCollection
     */
    public function setSpecins($specins)
    {
        $this->specins = $specins;
        return $this;
    }
}