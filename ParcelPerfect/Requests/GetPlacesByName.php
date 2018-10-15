<?php
namespace ParcelPerfect\Requests;

use ParcelPerfect\Entities\QuotePlace;
use ParcelPerfect\ParcelPerfectBase;
use ParcelPerfect\ParcelPerfectException;

class GetPlacesByName extends ParcelPerfectBase
{
    /**
     * @param $name
     * @return QuotePlace[]
     */
    public function getPlacesByName($name)
    {
        $params = [
            "name" => $name
        ];

        $places = [];

        $result = $this->client->__soapCall("Quote_getPlacesByName", array($this->token, $params));
        if ($result->errorcode != 0) {
            throw new ParcelPerfectException($result->errormessage, $result->errorcode);
        } else {
            foreach ($result->results as $place) {
                $places[] = new QuotePlace($place->town, $place->place, $place->pcode);
            }
            return $places;
        }
    }
}