<?php

namespace ParcelPerfect\Requests;

use ParcelPerfect\Entities\Collection;
use ParcelPerfect\Entities\QuoteCollection;
use ParcelPerfect\ParcelPerfectBase;
use ParcelPerfect\ParcelPerfectException;

class QuoteUpdateService extends ParcelPerfectBase
{

    /**
     * @var QuoteCollection
     */
    protected $quote;
    protected $service;

    /**
     * @return Collection
     * @throws ParcelPerfectException
     */
    public function updateService()
    {
        try {
            $result = $this->client->__soapCall("Quote_updateService", array($this->token, $this->buildRequest()));

        } catch (\Exception $ex) {
            var_dump($ex->getMessage());
            die();
        }

        if ($result->errorcode != 0) {
            throw new ParcelPerfectException($result->errormessage, $result->errorcode);
        } else {
            if (!$result->results[0]) {
                throw new ParcelPerfectException('Parcel Perfect returned no results', 400);
            }
            return $result->results[0];
        }
    }

    private function buildRequest()
    {
        $quote = [];
        $quote['quoteno'] = $this->getQuote();
        $quote['service'] = $this->getService();

        return $quote;
    }

    /**
     * @param string $quote
     * @return QuoteUpdateService
     */
    public function setQuote($quote)
    {
        $this->quote = $quote;
        return $this;
    }

    /**
     * @return QuoteCollection
     */
    public function getQuote()
    {
        return $this->quote;
    }

    /**
     * @param mixed $service
     * @return QuoteUpdateService
     */
    public function setService($service)
    {
        $this->service = $service;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getService()
    {
        return $this->service;
    }
}
