<?php

namespace App\Repositories;

use App\Models\Product;
use App\Models\ProductPrice;

class ProductPriceRepository extends BaseRepository
{
    public function __construct(ProductPrice $model)
    {
        parent::__construct($model);
    }
}
