<?php

namespace App\Repositories;

abstract class CoreRepository
{
    abstract protected function createModel();

    public function start()
    {
        return $this->createModel();
    }
}
