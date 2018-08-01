<?php

use ParcelPerfect\Entities\PackageContents;
use ParcelPerfect\Entities\PackageDetails;
use ParcelPerfect\Requests\GetQuotes;
use PHPUnit\Framework\TestCase;

final class TestGetQuotes extends TestCase
{
    public function testSetDetails()
    {
        $details = new PackageDetails();
        $getQuotes = new GetQuotes('bonline@ecom.co.za', 'bonlineEcom');
        $getQuotes->setDetails($details);
        $fetchedDetails = $getQuotes->getDetails();
        $this->assertInstanceOf(PackageDetails::class, $fetchedDetails);
    }

    public function testSetContents()
    {
        $contents = new PackageContents();
        $getQuotes = new GetQuotes('bonline@ecom.co.za', 'bonlineEcom');
        $getQuotes->setContents($contents);
        $fetchedContents = $getQuotes->getContents();
        $this->assertInstanceOf(PackageContents::class, $fetchedContents);
    }
}