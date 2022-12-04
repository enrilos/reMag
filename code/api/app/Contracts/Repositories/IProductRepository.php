<?php

namespace App\Contracts\Repositories;

interface IProductRepository
{
    public function all();
    public function get($id);
    public function by($column, $value);
}
