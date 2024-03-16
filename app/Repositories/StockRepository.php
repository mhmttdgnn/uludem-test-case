<?php

namespace App\Repositories;

use App\Models\MYSql\Stock;
use App\Models\SQLSrv\Stok as SqlSrvStok;
use App\Objects\StockObject;

class StockRepository
{
    public function getStocks()
    {
        return SqlSrvStok::select('ID', 'KOD', 'ADI')->get();
    }

    public function saveStock(StockObject $stockObject)
    {
        return Stock::updateOrCreate(
            ['code' => $stockObject->getCode()],
            [
                'name' => $stockObject->getName(),
                'sqlsrv_id' => $stockObject->getSqlsrvId()
            ]
        );
    }
}
