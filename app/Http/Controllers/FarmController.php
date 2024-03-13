<?php

namespace App\Http\Controllers;

use App\Interfaces\Services\FarmServiceInterface;

class FarmController extends Controller
{
    private FarmServiceInterface $farmService;

    public function __construct(FarmServiceInterface $farmService)
    {
        $this->farmService = $farmService;
    }

    public function addAnimalsByType($type, $quantity = 1): bool
    {
        return $this->farmService->addAnimalsByType($type, $quantity);
    }

    public function showQuantityTypeAnimals(): self
    {
        echo "Информация о количестве каждого типа животных на ферме: ";
        print_r($this->farmService->getQuantityTypeAnimals());
        return $this;
    }

    public function collectProducts(): self
    {
        $this->farmService->collectProducts();
        return $this;
    }

    public function showQuantityProducts(): self
    {
        echo "Количество каждого типа продукции: ";
        print_r($this->farmService->getQuantityProducts());
        return $this;
    }
}
