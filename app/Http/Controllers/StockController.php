<?php

namespace App\Http\Controllers;

use App\Models\SQLSrv\Stok as SqlSrvStok;
use App\Objects\StockObject;
use App\Services\StockService;
use Illuminate\Http\Request;

class StockController extends Controller
{
    protected StockService $stockService;

    public function __construct(StockService $stockService)
    {
        $this->stockService = $stockService;
    }

    public function index()
    {
        try {
            $stocks = $this->stockService->getStocks();

            return response()->json([
                'status'=> true,
                'data' => $stocks
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status'=> false,
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function store()
    {
        try {
            $stocks = SqlSrvStok::select('ID', 'KOD', 'ADI')->get();

            foreach ($stocks as $stock) {
                $stockObject = new StockObject();
                $stockObject->setSqlsrvId($stock->ID);
                $stockObject->setCode($stock->KOD);
                $stockObject->setName($stock->ADI);

                $this->stockService->saveStock($stockObject);
            }

            return response()->json([
                'status'=> true,
                'data' => 'Stok bilgileri başarıyla kaydedildi.'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status'=> false,
                'message' => $e->getMessage()
            ], 500);
        }
    }
}
