<?php

namespace App\Console\Commands;

use App\Http\Controllers\FarmController;
use Illuminate\Console\Command;

class FarmLife extends Command
{
    private FarmController $farmController;

    public function __construct(FarmController $farmController)
    {
        $this->farmController = $farmController;
        parent::__construct();
    }

    protected $signature = 'farm:life';
    protected $description = 'Running a farm life';

    public function handle(): void
    {
        $this->farmController->addAnimalsByType('chicken', 20);
        $this->farmController->addAnimalsByType('cow', 10);
        $this->farmController->showQuantityTypeAnimals();

        $this->farmController->collectProducts();
        $this->farmController->showQuantityProducts();

        $this->farmController->addAnimalsByType('chicken', 5);
        $this->farmController->addAnimalsByType('cow');
        $this->farmController->showQuantityTypeAnimals();

        $this->farmController->collectProducts();
        $this->farmController->showQuantityProducts();
    }
}
