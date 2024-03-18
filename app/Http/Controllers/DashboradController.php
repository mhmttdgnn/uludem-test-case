<?php

namespace App\Http\Controllers;

use App\Http\Requests\OfferRequest;
use App\Models\MYSql\Account;
use App\Models\MYSql\Offer;
use App\Models\MYSql\Stock;
use App\Objects\OfferObject;
use App\Services\OfferService;
use App\Services\StockService;
use Illuminate\Http\Request;

class DashboradController extends Controller
{
    protected OfferService $offerService;
    protected StockService $stockService;

    public function __construct(OfferService $offerService, StockService $stockService)
    {
        $this->offerService = $offerService;
        $this->stockService = $stockService;
    }

    public function index()
    {
        $title = 'Dashboard';

        return view('dashboard', compact('title'));
    }

    public function accounts()
    {
        $title = 'Cari Hesaplar';

        $data = Account::all();

        return view('cms.accounts', compact('title', 'data'));
    }

    public function stocks()
    {
        $title = 'Stoklar';

        $data = Stock::all();

        return view('cms.stocks', compact('title', 'data'));
    }

    public function offers()
    {
        $title = 'Teklifler';

        $data = Offer::all();

        return view('cms.offers', compact('title', 'data'));
    }

    public function getAccounts()
    {
        $data = Account::select('id', 'code')->get();

        return $data;
    }

    public function getStocks()
    {
        $data = Stock::select('id', 'code')->get();

        return $data;
    }

    public function storeOffer(OfferRequest $request)
    {
        try {
            $offerObject = new OfferObject();
            $offerObject->setAccountId($request->account_id);
            $offerObject->setStocks($request->stocks);
            $offerObject->setTitle($request->title);
            $offerObject->setPrice($request->price);

            $offer = $this->offerService->saveOffer($offerObject);

            return response()->json(['status' => 'success', 'data' => $offer], 200);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }

    public function viewOffer(Request $request)
    {
        try {
            $offerObject = new OfferObject();
            $offerObject->setId($request->id);
            $offer = $this->offerService->getOffer($offerObject);

            $stocks = $this->stockService->getMyStocks();

            $data = [
                'offer' => $offer,
                'stocks' => $stocks
            ];

            return response()->json(['status' => 'success', 'data' => $data], 200);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }
}
