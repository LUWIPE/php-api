<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\ProductResource;
use App\Models\Product;

class ProductController
{
    public function index()
    {
        $products = Product::query()
            ->select([
                'id',
                'name',
                'desc',
                'img_url',
                'price',
                'stock',
                'release',
                'type_id',
                'grade_id',
                'is_digital_id',
            ])
            ->with([
                'type:id,name',
                'grade:id,name',
                'digital:id,name',
            ])
            ->orderBy('id')
            ->get();

        return ProductResource::collection($products);
    }
}
