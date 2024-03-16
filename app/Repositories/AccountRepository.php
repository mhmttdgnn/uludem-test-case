<?php

namespace App\Repositories;

use App\Models\MYSql\Account;
use App\Models\SQLSrv\Cari as SqlSrvCari;
use App\Objects\AccountObject;

class AccountRepository
{

    public function getAccounts()
    {
        return SqlSrvCari::select('ID', 'KOD', 'ADI')->get();
    }

    public function saveAccount(AccountObject $accountObject)
    {
        Account::updateOrCreate(
            ['code' => $accountObject->getCode()],
            [
                'name' => $accountObject->getName(),
                'sqlsrv_id' => $accountObject->getSqlsrvId()
            ]
        );
    }
}
