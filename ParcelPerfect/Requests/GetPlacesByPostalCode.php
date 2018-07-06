<?php
/**
 * Created by PhpStorm.
 * User: bonline
 * Date: 2018/07/04
 * Time: 3:48 PM
 */

namespace ParcelPerfect;


use ParcelPerfect\Entities\QuotePlace;

class GetPlacesByPostalCode extends ParcelPerfectBase
{
    /**
     * @param $code
     * @return QuotePlace[]
     */
    public function getQuotesByPostalCode($code)
    {
        $params = [
            "postcode" => $code
        ];

        $places = [];

        $result = $this->client->__soapCall("Quote_getPlacesByPostcode", array($this->token, $params));
        if ($result->errorcode != 0) {
            echo $result->errormessage . "<br>";
        } else {
            foreach ($result->results as $place) {
                $places[] = new QuotePlace($place->town, $place->place, $place->pcode);
            }
        }
        return $places;
    }
}