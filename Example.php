<?php

use ParcelPerfect\Entities\PackageContents;
use ParcelPerfect\Entities\PackageDetails;
use ParcelPerfect\Entities\PackageAddress;
use ParcelPerfect\Entities\QuoteCollection;
use ParcelPerfect\Requests\AcceptQuote;
use ParcelPerfect\Requests\GetQuotes;
use ParcelPerfect\Requests\GetPlacesByName;
use ParcelPerfect\Requests\GetPlacesByPostalCode;

require_once 'vendor/autoload.php';

function dd($var) {
    var_dump($var);
    die();
}


$getByPostalCode = new GetPlacesByPostalCode('bonline@ecom.co.za', 'bonlineEcom');
$dropoffPlace = $getByPostalCode->getPlacesByPostalCode('2000')[0];

$getPlacesByName = new GetPlacesByName('bonline@ecom.co.za', 'bonlineEcom');
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

$deliveryRequest = new GetQuotes('bonline@ecom.co.za', 'bonlineEcom');
$quotes = $deliveryRequest->setContents([$itemContents])->setDetails($pickupDetails)->requestQuotes();

$quote = (new QuoteCollection())->setQuoteno($quotes->getQuoteNumber());
$acceptQuote = (new AcceptQuote('bonline@ecom.co.za', 'bonlineEcom'))
    ->setQuote($quote)
    ->accept();

dd($acceptQuote);