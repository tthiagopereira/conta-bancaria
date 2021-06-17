<?php

namespace App\Http\Controllers;

use App\Service\PersonService;
use App\Validate\PersonValidate;
use Illuminate\Http\Request;

class PersonController extends Controller
{

    public function __construct(PersonService $person, PersonValidate $personValidate)
    {
        $this->service = $person;
        $this->validate = $personValidate;
    }

    public function store(Request $request)
    {
        $validate = $this->validate->validar($request);
        if($validate->fails()) {
            return response()->json($validate->messages());
        }
        return $this->service->store($request);
    }

}
