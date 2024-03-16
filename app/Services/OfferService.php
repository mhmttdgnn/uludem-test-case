<?php

namespace App\Services;

use App\Objects\OfferObject;
use App\Repositories\OfferRepository;

class OfferService
{
    protected OfferRepository $offerRepository;

    public function __construct(OfferRepository $offerRepository)
    {
        $this->offerRepository = $offerRepository;
    }

    public function saveOffer(OfferObject $offerObject)
    {
        return $this->offerRepository->saveOffer($offerObject);
    }

    public function getOffer(OfferObject $offerObject)
    {
        return $this->offerRepository->getOffer($offerObject);
    }
}
