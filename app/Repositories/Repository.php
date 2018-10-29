<?php
/**
 * Created by PhpStorm.
 * User: dungduong
 * Date: 10/28/2018
 * Time: 1:37 PM
 */

namespace App\Repositories;

interface Repository
{
    public function getAll();

    public function findById($id);

    public function create($data);

    public function update($data, $object);

    public function destroy($object);
}
