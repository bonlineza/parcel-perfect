<?php
namespace ParcelPerfect\Requests;

use ParcelPerfect\Entities\QuotePlace;
use ParcelPerfect\ParcelPerfectBase;
use ParcelPerfect\ParcelPerfectException;

class GetPlacesByPostalCode extends ParcelPerfectBase
{
    /**
     * @param $code
     * @return QuotePlace[]
     */
    public function getPlacesByPostalCode($code)
    {
        $params = [
            "postcode" => $code
        ];

        $places = [];

        $result = $this->client->__soapCall("Quote_getPlacesByPostcode", array($this->token, $params));
        if ($result->errorcode != 0) {
            throw new ParcelPerfectException($result->errormessage, $result->errorcode);
        } else {
            foreach ($result->results as $place) {
                $places[] = new QuotePlace($place->town, $place->place, $place->pcode);
            }
        }
        return $places;
    }
}