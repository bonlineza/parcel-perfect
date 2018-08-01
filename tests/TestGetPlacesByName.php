<?php

use ParcelPerfect\Entities\QuotePlace;
use ParcelPerfect\Requests\GetPlacesByName;
use PHPUnit\Framework\TestCase;

final class TestGetPlacesByName extends TestCase
{
    public function testGetPlacesByName() {
        $request = new GetPlacesByName('bonline@ecom.co.za', 'bonlineEcom');
        $places = $request->getPlacesByName('Stellenbosch');
        $this->assertTrue(is_array($places));
        foreach ($places as $place) {
            $this->assertInstanceOf(QuotePlace::class, $place);
        }

    }
}
