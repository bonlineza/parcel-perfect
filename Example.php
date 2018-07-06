<?php

use ParcelPerfect\Entities\PackageContents;
use ParcelPerfect\Entities\PackageDetails;
use ParcelPerfect\Entities\PackageAddress;
use ParcelPerfect\Entities\GetQuotes;
use ParcelPerfect\GetPlacesByPostalCode;

require_once 'vendor/autoload.php';

function dd($var) {
    var_dump($var);
    die();
}

$requestQuote = new GetPlacesByPostalCode('bonline@ecom.co.za', 'bonlineEcom');
$pickupPlace = $requestQuote->getQuotesByPostalCode('7600')[0];
$dropoffPlace = $requestQuote->getQuotesByPostalCode('2000')[0];

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
dd($deliveryRequest->setContents([$itemContents])->setDetails($pickupDetails)->requestQuotes());

