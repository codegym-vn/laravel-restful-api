<?php

/**
 * Created by PhpStorm.
 * User: dungduong
 * Date: 10/28/2018
 * Time: 1:46 PM
 */

namespace App\Http\Repositories\EloquentImpl;

use App\Customer;
use App\Http\Repositories\CustomerRepository;

class CustomerRepositoryImpl extends EloquentRepository implements CustomerRepository
{
    /**
     * get Model
     * @return string
     */
    public function getModel()
    {
        $model = Customer::class;
        return $model;
    }
}
