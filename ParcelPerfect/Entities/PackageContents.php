<?php
namespace ParcelPerfect\Entities;


class PackageContents {

    protected $itemNumber;
    protected $description;
    protected $pieces;
    protected $dim1;
    protected $dim2;
    protected $dim3;
    protected $actmass;

    /**
     * QuoteContents constructor.
     */
    public function __construct() {
    }

    /**
     * @return mixed
     */
    public function getItemNumber()
    {
        return $this->itemNumber;
    }

    /**
     * @return null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getPieces()
    {
        return $this->pieces;
    }

    /**
     * @return mixed
     */
    public function getDim1()
    {
        return $this->dim1;
    }

    /**
     * @return mixed
     */
    public function getDim2()
    {
        return $this->dim2;
    }

    /**
     * @return mixed
     */
    public function getDim3()
    {
        return $this->dim3;
    }

    /**
     * @return mixed
     */
    public function getActmass()
    {
        return $this->actmass;
    }

    /**
     * @param mixed $itemNumber
     * @return PackageContents
     */
    public function setItemNumber($itemNumber)
    {
        $this->itemNumber = $itemNumber;
        return $this;
    }

    /**
     * @param null $description
     * @return PackageContents
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @param mixed $pieces
     * @return PackageContents
     */
    public function setPieces($pieces)
    {
        $this->pieces = $pieces;
        return $this;
    }

    /**
     * @param mixed $dim1
     * @return PackageContents
     */
    public function setDim1($dim1)
    {
        $this->dim1 = $dim1;
        return $this;
    }

    /**
     * @param mixed $dim2
     * @return PackageContents
     */
    public function setDim2($dim2)
    {
        $this->dim2 = $dim2;
        return $this;
    }

    /**
     * @param mixed $dim3
     * @return PackageContents
     */
    public function setDim3($dim3)
    {
        $this->dim3 = $dim3;
        return $this;
    }

    /**
     * @param mixed $actmass
     * @return PackageContents
     */
    public function setActmass($actmass)
    {
        $this->actmass = $actmass;
        return $this;
    }



}