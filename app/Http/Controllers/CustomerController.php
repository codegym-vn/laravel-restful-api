<?php

namespace App\Http\Controllers;

use App\Http\Services\CustomerService;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    protected $customerService;

    public function __construct(CustomerService $customerService)
    {
        $this->customerService = $customerService;
    }

    public function index()
    {
        $dataCustomer = $this->customerService->getAll();

        return response()->json($dataCustomer['customers'], $dataCustomer['statusCode']);
    }

    public function show($id)
    {
        $dataCustomer = $this->customerService->findById($id);

        return response()->json($dataCustomer['customers'], $dataCustomer['statusCode']);
    }

    public function store(Request $request)
    {
        $dataCustomer = $this->customerService->create($request->all());

        return response()->json($dataCustomer['customers'], $dataCustomer['statusCode']);
    }

    public function update(Request $request, $id)
    {
        $dataCustomer = $this->customerService->update($request->all(), $id);

        return response()->json($dataCustomer['customers'], $dataCustomer['statusCode']);
    }

    public function destroy($id)
    {
        $dataCustomer = $this->customerService->destroy($id);

        return response()->json($dataCustomer['message'], $dataCustomer['statusCode']);
    }
}
