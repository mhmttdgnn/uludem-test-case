<?php

namespace App\Services;

use App\Objects\AccountObject;
use App\Repositories\AccountRepository;

class AccountService
{
    protected $accountRepository;

    public function __construct(AccountRepository $accountRepository) {
        $this->accountRepository = $accountRepository;
    }

    public function getAccounts()
    {
        return $this->accountRepository->getAccounts();
    }

    public function saveAccount(AccountObject $accountObject)
    {
        $this->accountRepository->saveAccount($accountObject);
    }
}
