<?php
namespace ParcelPerfect\Requests;

use ParcelPerfect\Entities\PackageContents;
use ParcelPerfect\Entities\PackageDetails;
use ParcelPerfect\Entities\QuoteRate;
use ParcelPerfect\ParcelPerfectBase;
use ParcelPerfect\Entities\Quotes;
use ParcelPerfect\ParcelPerfectException;
use Psr\Http\Message\StreamInterface;

class GetSingleWaybill extends ParcelPerfectBase
{
    /**
     * @var String
     */
    private $waybillNumber;


    /**
     * @return Quotes
     * @throws ParcelPerfectException
     */
    public function getWaybill () {
        $result = $this->client->__soapCall("Waybill_getSingleWaybill", [$this->token, $this->buildRequest()]);

        if($result->errorcode != 0){
            new ParcelPerfectException($result->errormessage, $result->errorcode);
        }else{
            if(!$result->results[0]) {
                throw new ParcelPerfectException('Parcel Perfect returned no results', 400);
            }
            else return $result->results[0];
        }
    }

    private function buildRequest()
    {
        return [
            'waybillno' => $this->getWaybillNumber()
        ];
    }

    /**
     * @param String $waybillNumber
     * @return GetSingleWaybill
     */
    public function setWaybillNumber($waybillNumber)
    {
        $this->waybillNumber = $waybillNumber;
        return $this;
    }

    /**
     * @return String
     */
    public function getWaybillNumber()
    {
        return $this->waybillNumber;
    }
}