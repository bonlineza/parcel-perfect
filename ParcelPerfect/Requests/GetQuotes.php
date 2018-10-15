<?php
namespace ParcelPerfect\Requests;

use ParcelPerfect\Entities\PackageContents;
use ParcelPerfect\Entities\PackageDetails;
use ParcelPerfect\Entities\QuoteRate;
use ParcelPerfect\ParcelPerfectBase;
use ParcelPerfect\Entities\Quotes;
use ParcelPerfect\ParcelPerfectException;

class GetQuotes extends ParcelPerfectBase
{
    /**
     * @var PackageDetails
     */
    private $details;

    /**
     * @var PackageContents[]
     */
    private $contents;

    /**
     * @param PackageDetails $deliveryDetails
     * @return GetQuotes
     */
    public function setDetails(PackageDetails $deliveryDetails) {
        $this->details = $deliveryDetails;
        return $this;
    }

    /**
     * @param PackageContents[] $contents
     * @return GetQuotes
     */
    public function setContents($contents)
    {
        $this->contents = $contents;
        return $this;
    }


    /**
     * @return Quotes
     * @throws ParcelPerfectException
     */
    public function requestQuotes () {
        $result = $this->client->__soapCall("Quote_requestQuote", array($this->token, $this->buildRequest()));
        if($result->errorcode != 0){
            throw new ParcelPerfectException($result->errormessage, $result->errorcode);
        } else {
            if(!$result->results[0]) {
                throw new ParcelPerfectException('Parcel Perfect returned no results', 400);
            }
            $rates = [];
            foreach ($result->results[0]->rates as $rate) {
                $rates[] = (new QuoteRate())
                    ->setService($rate->service)
                    ->setName($rate->name)
                    ->setCharge($rate->charge)
                    ->setInsurance($rate->insurance)
                    ->setCustomsValue($rate->customsvalue)
                    ->setOutly($rate->outly)
                    ->setDoc($rate->docs)
                    ->setHandling($rate->handling)
                    ->setCursurCharge($rate->cursurcharge)
                    ->setTotalSurcharge($rate->totsurcharge)
                    ->setSubtotal($rate->subtotal)
                    ->setVat($rate->vat)
                    ->setTotal($rate->total)
                    ->setCustomDuties($rate->customsduties)
                    ->setCustomsVat($rate->customsvat)
                    ->setDueDate($rate->duedate)
                    ->setDueTime($rate->duetime);
            }
            return new Quotes($result->results[0]->quoteno, $rates);
        }
    }

    private function buildRequest()
    {
        $requestQuote = [];
        $requestQuote['details'] = [];
        $requestQuote['details']['waybill'] = $this->details->getWaybill();
        $requestQuote['details']['accnum'] = $this->details->getAccnum();
        $requestQuote['details']['costcentre'] = $this->details->getCostcentre();
        $requestQuote['details']['service'] = $this->details->getService();
        $requestQuote['details']['waydate'] = $this->details->getWaydate();
        $requestQuote['details']['origpers'] = $this->details->getPickupLocation()->getContactName();
        $requestQuote['details']['origperadd1'] = $this->details->getPickupLocation()->getAddressLineOne();
        $requestQuote['details']['origperadd2'] = $this->details->getPickupLocation()->getAddressLineTwo();
        $requestQuote['details']['origperadd3'] = $this->details->getPickupLocation()->getAddressLineThree();
        $requestQuote['details']['origperadd4'] = $this->details->getPickupLocation()->getAddressLineFour();
        $requestQuote['details']['origplace'] = $this->details->getPickupLocation()->getPlaceId();
        $requestQuote['details']['origtown'] = $this->details->getPickupLocation()->getTown();
        $requestQuote['details']['origperpcode'] = $this->details->getPickupLocation()->getPostalCode();
        $requestQuote['details']['origpercontact'] = $this->details->getPickupLocation()->getContact();
        $requestQuote['details']['origperphone'] = $this->details->getPickupLocation()->getPhoneNumber();
        $requestQuote['details']['origperphone2'] = $this->details->getPickupLocation()->getAlternativePhoneNumber();
        $requestQuote['details']['origpercell'] = $this->details->getPickupLocation()->getCellphone();
        $requestQuote['details']['destpers'] = $this->details->getDropoffLocation()->getContactName();
        $requestQuote['details']['destperadd1'] = $this->details->getDropoffLocation()->getAddressLineOne();
        $requestQuote['details']['destperadd2'] = $this->details->getDropoffLocation()->getAddressLineTwo();
        $requestQuote['details']['destperadd3'] = $this->details->getDropoffLocation()->getAddressLineThree();
        $requestQuote['details']['destperadd4'] = $this->details->getDropoffLocation()->getAddressLineFour();
        $requestQuote['details']['destplace'] = $this->details->getDropoffLocation()->getPlaceId();
        $requestQuote['details']['desttown'] = $this->details->getDropoffLocation()->getTown();
        $requestQuote['details']['destperpcode'] = $this->details->getDropoffLocation()->getPostalCode();
        $requestQuote['details']['destpercontact'] = $this->details->getDropoffLocation()->getContact();
        $requestQuote['details']['destperphone'] = $this->details->getDropoffLocation()->getPhoneNumber();
        $requestQuote['details']['destperphone2'] = $this->details->getDropoffLocation()->getAlternativePhoneNumber();
        $requestQuote['details']['destpercell'] = $this->details->getDropoffLocation()->getCellphone();
        $requestQuote['details']['duedate'] = $this->details->getDuedate();
        $requestQuote['details']['specinstruction'] = $this->details->getSpecinstruction();
        $requestQuote['details']['reference'] = $this->details->getReference();
        $requestQuote['details']['insuranceflag'] = $this->details->getInsuranceflag();
        $requestQuote['details']['instype'] = $this->details->getInstype();
        $requestQuote['details']['declaredvalue'] = $this->details->getDeclaredvalue();
        $requestQuote['details']['nondoxflag'] = $this->details->getNondoxflag();
        $requestQuote['details']['currency'] = $this->details->getCurrency();
        $requestQuote['details']['customsvalue'] = $this->details->getCustomsvalue();
        $requestQuote['details']['surchargeflag1'] = $this->details->getSurchargeflag1();
        $requestQuote['details']['surchargeflag2'] = $this->details->getSurchargeflag2();
        $requestQuote['details']['surchargeflag3'] = $this->details->getSurchargeflag3();
        $requestQuote['details']['surchargeflag4'] = $this->details->getSurchargeflag4();
        $requestQuote['details']['surchargeflag5'] = $this->details->getSurchargeflag5();
        $requestQuote['details']['surchargeflag6'] = $this->details->getSurchargeflag6();
        $requestQuote['details']['surchargeflag7'] = $this->details->getSurchargeflag7();
        $requestQuote['details']['surchargeflag8'] = $this->details->getSurchargeflag8();
        $requestQuote['details']['surchargeflag9'] = $this->details->getSurchargeflag9();

        $requestQuote['contents'] = [];

        foreach ($this->contents as $key => $item) {
            $requestQuote['contents'][$key] = [];
            $requestQuote['contents'][$key]['item'] = $item->getItemNumber();
            $requestQuote['contents'][$key]['description'] = $item->getDescription();
            $requestQuote['contents'][$key]['pieces'] = $item->getPieces();
            $requestQuote['contents'][$key]['dim1'] = $item->getDim1();
            $requestQuote['contents'][$key]['dim2'] = $item->getDim2();
            $requestQuote['contents'][$key]['dim3'] = $item->getDim3();
            $requestQuote['contents'][$key]['actmass'] = $item->getActmass();
        }
        return $requestQuote;
    }
}