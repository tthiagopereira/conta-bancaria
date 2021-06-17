<?php

namespace App\Http\Controllers;

use App\Service\UserService;
use App\Validate\UserValidate;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function __construct(UserService $userService, UserValidate $userValidate)
    {
        $this->service = $userService;
        $this->validate = $userValidate;
    }

    public function update(Request $request, $id)
    {
        $validate = $this->validate->validateUserUpdate($request);
        if($validate->fails()){
            return response()->json($validate->messages());
        }
        return response()->json($this->service->update($request, $id));
    }

    public function userDetalhado($id)
    {
        return $this->service->userDetalhado($id);
    }

    public function userBusca($busca)
    {
        return $this->service->userBusca($busca);
    }
}
