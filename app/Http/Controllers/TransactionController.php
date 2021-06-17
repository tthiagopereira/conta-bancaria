<?php

namespace App\Http\Controllers;

use App\Service\TransactionService;
use App\Validate\TransactionValidate;

class TransactionController extends Controller
{
  public function __construct(TransactionService $transactionService, TransactionValidate $transactionValidate)
  {
    $this->service = $transactionService;
    $this->validate = $transactionValidate;
  }
}
