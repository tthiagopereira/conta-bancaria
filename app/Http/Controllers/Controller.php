<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $validate;
    protected $service;

    public function index()
    {
        return response()->json($this->service->index());
    }

    public function store(Request $request)
    {
        $validate = $this->validate->validar($request);
        if($validate->fails()){
            return response()->json($validate->messages());
        }
        return response()->json($this->service->create($request));
    }

    public function show($id)
    {
        return $this->service->show($id);
    }

    public function update(Request $request, $id)
    {
        $validate = $this->validate->validar($request);
        if($validate->fails()){
            return response()->json($validate->messages());
        }
        return response()->json($this->service->edit($request));
    }

    public function destroy($id)
    {
        return response()->json(['message'=>$this->service->delete($id)]);
    }
}
