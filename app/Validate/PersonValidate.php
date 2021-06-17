<?php


namespace App\Validate;


use Illuminate\Support\Facades\Validator;

class PersonValidate
{
    public function validar($request)
    {
        return Validator::make($request->all(), [
            'conta_id' => 'required|exists:App\Conta,id'
        ]);
    }
}
