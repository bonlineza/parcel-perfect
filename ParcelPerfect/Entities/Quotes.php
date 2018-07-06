<?php
namespace ParcelPerfect\Entities;


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

    /**
     * @return string
     */
    public function getQuoteNumber()
    {
        return $this->quoteNumber;
    }

    /**
     * @return QuoteRate[]
     */
    public function getRates()
    {
        return $this->rates;
    }


}