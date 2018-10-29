<?php

/**
 * Created by PhpStorm.
 * User: dungduong
 * Date: 10/28/2018
 * Time: 1:46 PM
 */

namespace App\Repositories\Impl;

use App\Customer;
use App\Repositories\CustomerRepository;
use App\Repositories\Eloquent\EloquentRepository;

class CustomerRepositoryImpl extends EloquentRepository  implements CustomerRepository
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
