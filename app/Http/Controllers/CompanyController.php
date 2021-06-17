<?php

namespace App\Http\Controllers;

use App\Service\CompanyService;
use App\Validate\CompanyValidate;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function __construct(CompanyService $companyService, CompanyValidate $companyValidate)
    {
        $this->service = $companyService;
        $this->validate = $companyValidate;
    }

    public function store(Request $request)
    {
        $validate = $this->validate->validar($request);
        if($validate->fails()){
            return response()->json($validate->messages());
        }
        return response()->json($this->service->store($request));
    }
}
