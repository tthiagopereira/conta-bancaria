<?php


namespace App\Service;

use App\Person;

class PersonService extends DaoService
{
    public function __construct()
    {
        $this->class = Person::class;
    }

    public function store($request)
    {
        $conta_pessoal = Person::where('conta_id', $request->conta_id)->first();
        if($conta_pessoal) {
            return response()->json(['message' => 'Conta pessoal já existente']);
        }
        return $this->create($request);
    }
}
