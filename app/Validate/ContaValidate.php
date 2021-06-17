<?php


namespace App\Validate;


use Illuminate\Support\Facades\Validator;

class ContaValidate
{
    public function validar($request)
    {
        $validate = Validator::make($request->all(), [
            'agencia' => 'required',
            'numero' => 'required',
            'digito' => 'required',
            'user_id' => 'required|exists:App\User,id'
        ]);
        return $validate;
    }
}
