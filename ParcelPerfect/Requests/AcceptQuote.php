<?php
namespace ParcelPerfect\Requests;

use ParcelPerfect\Entities\Collection;
use ParcelPerfect\Entities\QuoteCollection;
use ParcelPerfect\ParcelPerfectBase;
use ParcelPerfect\ParcelPerfectException;
use SoapVar;

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
//        $soapBody = new SoapVar($this->buildRequest(), \XSD_ANYXML);
//        $result = $this->client->__soapCall("Collection_quoteToCollection", array($soapBody));

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL,'http://adpdemo.pperfect.com/ecomService/v10/Soap/index.php');
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $this->buildRequest());

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $result = curl_exec ($ch);

        curl_close ($ch);
        echo $result; die();

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
                ->setGenTrackingRetval($collect->gentracking_retval)
                ->setWaybillBase64($collect->waybillBase64)
                ->setWaybillNumber($collect->waybillno);
        }
    }

    private function buildRequest()
    {
        return "<soapenv:Envelope xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" xmlns:xsd=\"http://www.w3.org/2001/XMLSchema\" xmlns:soapenv=\"http://schemas.xmlsoap.org/soap/envelope/\" xmlns:pps=\"http://example.org/PPS\">
               <soapenv:Header/>
               <soapenv:Body>
                  <pps:Collection_quoteToCollection soapenv:encodingStyle=\"http://schemas.xmlsoap.org/soap/encoding/\">
                     <token_id xsi:type=\"xsd:string\">" . $this->token . "</token_id>
                     <params xsi:type=\"ecom:Collection_quoteToCollection_Request\" xmlns:ecom=\"http://adpdemo.pperfect.com/soap/EcomSoapService\">
                        <quoteno xsi:type=\"xsd:string\">" . $this->getQuote()->getQuoteno() . "</quoteno>
                        <waybillno xsi:type=\"xsd:string\">" . $this->getQuote()->getWaybillno() . "</waybillno>
                        <starttime xsi:type=\"xsd:string\">" . $this->getQuote()->getStarttime() . "</starttime>
                        <endtime xsi:type=\"xsd:string\">" . $this->getQuote()->getEndtime() . "</endtime>
                        <notes xsi:type=\"xsd:string\">" . $this->getQuote()->getNotes() . "</notes>
                        <specins xsi:type=\"xsd:string\">" . $this->getQuote()->getSpecins() . "</specins>
                        <printWaybill>" . $this->getQuote()->getPrintWaybill() . "</printWaybill>
                     </params>
                  </pps:Collection_quoteToCollection>
               </soapenv:Body>
            </soapenv:Envelope>";
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

    /**
     * @return QuoteCollection
     */
    public function getQuote()
    {
        return $this->quote;
    }
}