<?php

namespace App\Repositories\Product;

use App\Models\Products;

class ProductRepositoryImpl implements ProductRepository
{
    public function findAll()
    {
        return Products::get();
    }

    public function find($id) {
        return Products::find($id);
    }
}
