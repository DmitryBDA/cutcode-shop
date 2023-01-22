<?php

namespace App\Contracts;

use Illuminate\Support\Collection;
interface ProductListActionContract
{
    public function __invoke(): Collection;
}
