<?php


namespace App\Validate;


use Illuminate\Support\Facades\Validator;

class CompanyValidate
{
    public function validar($request)
    {
        $validate = Validator::make($request->all(), [
            'razao_social' => 'required',
            'nome_fantasia' => 'required',
            'cnpj' => 'required|unique:companies',
            'conta_id' => 'required|exists:App\Conta,id'
        ]);
        return $validate;
    }
}
