<?php


namespace App\Service;


use App\Transaction;

class TransactionService extends DaoService
{
    public function __construct()
    {
        $this->class = Transaction::class;
    }

}
