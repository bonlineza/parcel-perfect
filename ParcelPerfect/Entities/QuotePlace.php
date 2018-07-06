<?php
namespace ParcelPerfect\Entities;


class QuotePlace
{
    protected $town;
    protected $place;
    protected $pcode;

    /**
     * QuotePlace constructor.
     * @param $town
     * @param $place
     * @param $pcode
     */
    public function __construct($town, $place, $pcode)
    {
        $this->town = $town;
        $this->place = $place;
        $this->pcode = $pcode;
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
    public function getPlaceId()
    {
        return $this->place;
    }

    /**
     * @return mixed
     */
    public function getPcode()
    {
        return $this->pcode;
    }


}