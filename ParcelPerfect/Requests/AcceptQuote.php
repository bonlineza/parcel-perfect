<?php
namespace ParcelPerfect\Requests;

use ParcelPerfect\Entities\Collection;
use ParcelPerfect\Entities\QuoteCollection;
use ParcelPerfect\ParcelPerfectBase;
use ParcelPerfect\ParcelPerfectException;

class AcceptQuote extends ParcelPerfectBase
{

    /**
     * @var QuoteCollection
     */
    protected $quote;

    /**
     * @return Collection
     * @throws ParcelPerfectException
     */
    public function accept () {
        $result = $this->client->__soapCall("Collection_quoteToCollection", array($this->token, $this->buildRequest()));
        if($result->errorcode != 0){
            new ParcelPerfectException($result->errormessage, $result->errorcode);
        }else{
            if(!$result->results[0]) {
                throw new ParcelPerfectException('Parcel Perfect returned no results', 400);
            }
            $collect = $result->results[0];
            return (new Collection())
                ->setActkg($collect->actkg)
                ->setCollectionNumber($collect->collectno)
                ->setChargeMass($collect->chargemass)
                ->setGenTrackingRetval($collect->gentracking_retval)
                ->setLabelsBase64($collect->labelsBase64)
                ->setWaybillBase64($collect->waybillBase64)
                ->setWaybillNumber($collect->waybillno);
        }
    }

    private function buildRequest()
    {
        $quote = [];
        $quote['quoteno'] = $this->quote->getQuoteno();
        $quote['waybillno'] = $this->quote->getWaybillno();
        $quote['starttime'] = $this->quote->getStarttime();
        $quote['endtime'] = $this->quote->getEndtime();
        $quote['notes'] = $this->quote->getNotes();
        $quote['printWaybill'] = $this->quote->getPrintWaybill();
        $quote['printLabels'] = $this->quote->getPrintLabels();
        $quote['specins'] = $this->quote->getSpecins();

        return $quote;
    }

    /**
     * @param string $quote
     * @return AcceptQuote
     */
    public function setQuote($quote)
    {
        $this->quote = $quote;
        return $this;
    }
}