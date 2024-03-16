<?php

namespace App\Http\Controllers;

use App\Models\MYSql\Account;
use App\Models\SQLSrv\Cari as SQLSrvCari;
use App\Objects\AccountObject;
use App\Services\AccountService;
use Illuminate\Http\Request;

class CurrentAccountController extends Controller
{
    protected AccountService $accountService;

    public function __construct(AccountService $accountService)
    {
        $this->accountService = $accountService;
    }

    public function index()
    {
        try {
            $accounts = $this->accountService->getAccounts();

            return response()->json([
                'status'=> true,
                'data' => $accounts
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
            $accounts = SQLSrvCari::select('ID', 'KOD', 'ADI')->get();

            foreach ($accounts as $account) {
                $accountObject = new AccountObject();
                $accountObject->setSqlsrvId($account->ID);
                $accountObject->setCode($account->KOD);
                $accountObject->setName($account->ADI);

                $this->accountService->saveAccount($accountObject);
            }

            return response()->json([
                'status'=> true,
                'data' => 'Cari hesaplar başarıyla kaydedildi.'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status'=> false,
                'message' => $e->getMessage()
            ], 500);
        }
    }
}
