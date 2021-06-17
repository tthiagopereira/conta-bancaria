<?php


namespace App\Service;

use App\Conta;

class ContaService extends DaoService
{
    public function __construct()
    {
        $this->class = Conta::class;
    }

    public function account($id)
    {
        return Conta::with('user', 'people','companys','transactions')
            ->where('id', $id)
            ->get();
    }

}
