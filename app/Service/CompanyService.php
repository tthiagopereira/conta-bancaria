<?php


namespace App\Service;


use App\Company;

class CompanyService extends DaoService
{
    public function __construct()
    {
        $this->class = Company::class;
    }

    public function store($request)
    {
        $company = Company::where('conta_id', $request->conta_id)->first();
        if($company){
            return response()->json(['message' => 'Conta empresarial já existente']);
        }
        return response()->json($this->create($request));
    }
}
