<?php


namespace App\Validate;


use Illuminate\Support\Facades\Validator;

class UserValidate
{
    public function validar($request)
    {
        $validate = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'unique:users|required',
            'password' => 'required',
            'telefone' => 'required',
            'cpf' => 'required|unique:users'
        ]);
        return $validate;
    }

    public function validateUserUpdate($request)
    {
        $validate = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'telefone' => 'required',
        ]);
        return $validate;
    }
}
