<?php

namespace App\Contracts\Services\Data;

interface IProductService
{
    public function all();
    public function get($id);
    public function by($column, $value);
}
