<?php

namespace App\Services;

use App\Objects\StockObject;
use App\Repositories\StockRepository;

class StockService
{
    protected $accountRepository;

    public function __construct(StockRepository $accountRepository) {
        $this->accountRepository = $accountRepository;
    }

    public function getStocks()
    {
        return $this->accountRepository->getStocks();
    }

    public function saveStock(StockObject $accountObject)
    {
        return $this->accountRepository->saveStock($accountObject);
    }
}
