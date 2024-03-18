<?php

namespace App\Repositories;

use App\Models\MYSql\Offer;
use App\Objects\OfferObject;
use Illuminate\Support\Str;

class OfferRepository
{
    public function saveOffer(OfferObject $offerObject)
    {
        $offer = new Offer();
        $offer->uuid = Str::uuid();
        $offer->account_id = $offerObject->getAccountId();
        $offer->title = $offerObject->getTitle();
        $offer->price = $offerObject->getPrice();
        $offer->save();

        $offer->stocks()->attach($offerObject->getStocks());

        return $offer;
    }

    public function getOffer(OfferObject $offerObject)
    {
        return Offer::with('account', 'stocks')->find($offerObject->getId());
    }
}
