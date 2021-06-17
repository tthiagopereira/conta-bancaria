<?php


namespace App\Validate;


use Illuminate\Support\Facades\Validator;

class TransactionValidate
{
    public function validar($request)
    {
        $validate = Validator::make($request->all(), [
            'tipo' => 'required|in:pagamento_conta,deposito,recarga_celular,compra_credito,compra',
            'valor' => 'required|numeric',
            'conta_id' => 'required|exists:App\Conta,id'
        ]);
        return $validate;
    }
}
