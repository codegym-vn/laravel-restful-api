<?php

namespace App\Http\Services\Impl;

use App\Http\Repositories\CustomerRepository;
use App\Http\Services\CustomerService;

/**
 * Created by PhpStorm.
 * User: dungduong
 * Date: 10/28/2018
 * Time: 2:25 PM
 */

class CustomerServiceImpl implements CustomerService
{
    protected $customerRepository;


    public function __construct(CustomerRepository $customerRepository)
    {
        $this->customerRepository = $customerRepository;
    }

    public function getAll()
    {
        $customers = $this->customerRepository->getAll();

        $statusCode = 200;
        if (!$customers)
            $statusCode = 204;

        $data = [
            'statusCode' => $statusCode,
            'customers' => $customers
        ];

        return $data;
    }

    public function findById($id)
    {
        $customer = $this->customerRepository->findById($id);

        $statusCode = 200;
        if (!$customer)
            $statusCode = 404;

            $data = [
                'statusCode' => $statusCode,
                'customers' => $customer
            ];

        return $data;
    }

    public function create($request)
    {
        $customer = $this->customerRepository->create($request);

        $statusCode = 201;
        if (!$customer)
            $statusCode = 500;

        $data = [
            'statusCode' => $statusCode,
            'customers' => $customer
        ];

        return $data;
    }

    public function update($request, $id)
    {
        $oldCustomer = $this->customerRepository->findById($id);

        if (!$oldCustomer) {
            $customer = null;
            $statusCode = 404;
        } else {
            $customer = $this->customerRepository->update($request, $oldCustomer);
            $statusCode = 200;
        }

        $data = [
            'statusCode' => $statusCode,
            'customers' => $customer
        ];
        return $data;
    }

    public function destroy($id)
    {
        $customer = $this->customerRepository->findById($id);

        $statusCode = 404;
        $message = "User not found";
        if ($customer) {
            $this->customerRepository->destroy($customer);
            $statusCode = 200;
            $message = "Delete success!";
        }

        $data = [
            'statusCode' => $statusCode,
            'message' => $message
        ];
        return $data;
    }

}
