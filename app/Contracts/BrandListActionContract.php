<?php

namespace App\Contracts;

use Illuminate\Support\Collection;
interface BrandListActionContract
{
    public function __invoke(): Collection;
}
