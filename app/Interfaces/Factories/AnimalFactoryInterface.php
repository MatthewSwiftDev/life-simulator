<?php

namespace App\Interfaces\Factories;

use App\Models\Animals\AbstractAnimal;
use Exception;

interface AnimalFactoryInterface
{
    public function createAnimal(string $type): AbstractAnimal|Exception;
}
