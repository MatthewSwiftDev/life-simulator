<?php

namespace App\Services;

use App\Exceptions\InvalidProductException;
use App\Interfaces\Factories\ProductSingletonFactoryInterface;
use App\Interfaces\Services\ProductServiceInterface;

class ProductService implements ProductServiceInterface
{
    private ProductSingletonFactoryInterface $productFactory;

    public function __construct(
        ProductSingletonFactoryInterface $productFactory,
    ) {
        $this->productFactory = $productFactory;
    }

    public function collectProductsFromAnimals(array $animals): array
    {
        $products = [];

        foreach ($animals as $animal) {
            $typeOfProduct = $animal->getTypeOfProduct();
            $animalProductivity = $animal->getProductivityPerDay();

            if (array_key_exists($typeOfProduct, $products)) {
                $product = $products[$typeOfProduct];
                $totalQuantityOfProduction = $product->getQuantityOfProduction() + $animalProductivity;

                $product->setQuantityOfProduction($totalQuantityOfProduction);
                $products[$typeOfProduct] = $product;
            } else {
                try {
                    $product = $this->productFactory->getProduct($typeOfProduct);
                    $product->setQuantityOfProduction($animalProductivity);
                    $products += [$typeOfProduct => $product];
                } catch (InvalidProductException $e) {
                    return [];
                }
            }
        }

        return $products;
    }
}
