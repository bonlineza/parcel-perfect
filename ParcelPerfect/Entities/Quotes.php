<?php
namespace ParcelPerfect;


class Quotes
{
    protected $quoteNumber;
    protected $rates;

    /**
     * QuotesResponse constructor.
     * @param $quoteNumber
     * @param $rates
     */
    public function __construct($quoteNumber, $rates) {
        $this->quoteNumber = $quoteNumber;
        $this->rates = $rates;
    }
}