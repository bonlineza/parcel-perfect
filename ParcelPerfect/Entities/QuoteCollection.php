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

}