<?php

namespace App\Contracts;

use Illuminate\Support\Collection;
interface CategoryListActionContract
{
    public function __invoke(): Collection;
}
