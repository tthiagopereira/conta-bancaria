<?php

namespace App\Http\Controllers;

use App\Conta;
use App\Service\ContaService;
use App\Validate\ContaValidate;
use Illuminate\Http\Request;

class ContaController extends Controller
{

    public function __construct(ContaService $service, ContaValidate $contaValidate)
    {
        $this->service = $service;
        $this->validate = $contaValidate;
    }

    public function accounts($id)
    {
        return $this->service->account($id);
    }
}
