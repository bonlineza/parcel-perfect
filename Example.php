<?php

use ParcelPerfect\Entities\PackageContents;
use ParcelPerfect\Entities\PackageDetails;
use ParcelPerfect\Entities\PackageAddress;
use ParcelPerfect\Entities\QuoteCollection;
use ParcelPerfect\Requests\AcceptQuote;
use ParcelPerfect\Requests\GetQuotes;
use ParcelPerfect\Requests\GetPlacesByName;
use ParcelPerfect\Requests\GetPlacesByPostalCode;
use ParcelPerfect\Requests\GetSingleWaybill;

require_once 'vendor/autoload.php';

function dd($var) {
    var_dump($var);
    die();
}

$config = [
    'username' => 'bonline@ecom.co.za',
    'password' => 'bonlineEcom',
    'api_url'  => 'http://adpdemo.pperfect.com/ecomService/v15/Soap/index.php?wsdl'
];

$getByPostalCode = new GetPlacesByPostalCode($config);
$dropoffPlace = $getByPostalCode->getPlacesByPostalCode('2000')[0];

$getPlacesByName = new GetPlacesByName($config);
$pickupPlace = $getPlacesByName->getPlacesByName('Stellenbosch')[0];

$pickupLocation = new PackageAddress();
$pickupLocation
    ->setPlaceId($pickupPlace->getPlaceId())
    ->setAddressLineOne('87 Ryneveldt')
    ->setTown('Stellenbosch')
    ->setPostalCode($pickupPlace->getPcode());

$dropoffLocation = new PackageAddress();
$dropoffLocation
    ->setPlaceId($dropoffPlace->getPlaceId())
    ->setAddressLineOne('56 King George St')
    ->setTown('Johannesburg')
    ->setPostalCode($dropoffPlace->getPcode());

$pickupDetails = new PackageDetails();
$pickupDetails->setPickupLocation($pickupLocation)->setDropoffLocation($dropoffLocation);

$itemContents = (new PackageContents())
    ->setActmass(1)
    ->setDescription('TEST')
    ->setDim1(1)
    ->setDim2(1)
    ->setDim3(1)
    ->setItemNumber(1)
    ->setPieces(1);

$deliveryRequest = new GetQuotes($config);
$quotes = $deliveryRequest->setContents([$itemContents])->setDetails($pickupDetails)->requestQuotes();

$quote = (new QuoteCollection())->setQuoteno($quotes->getQuoteNumber())->setPrintWaybill(1)->setSpecins("test instructions");
$acceptQuote = (new AcceptQuote($config))
    ->setQuote($quote)
    ->accept();

$waybillNumber = $acceptQuote->getWaybillNumber();

$getSingleWaybill = new GetSingleWaybill($config);
$waybill = $getSingleWaybill->setWaybillNumber($waybillNumber)->getWaybill();
dd($waybill);
