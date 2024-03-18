<?php

namespace App\Services;

use App\Objects\StockObject;
use App\Repositories\StockRepository;

class StockService
{
    protected $stockRepository;

    public function __construct(StockRepository $stockRepository) {
        $this->stockRepository = $stockRepository;
    }

    public function getStocks()
    {
        return $this->stockRepository->getStocks();
    }

    public function getMyStocks()
    {
        return $this->stockRepository->getMyStocks();

    }

    public function saveStock(StockObject $accountObject)
    {
        return $this->stockRepository->saveStock($accountObject);
    }
}
