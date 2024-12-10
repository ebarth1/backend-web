<?php
namespace App\Library\Administration;

use App\Repositories\read\FoodplannerRepository as FoodplannerReadRepository;

class FoodplannerLibrary {

    public function __construct(
        private readonly FoodplannerReadRepository $foodplannerReadRepository
    ){}

    public function getIngridients(): array
    {
        return $this->foodplannerReadRepository->getIngridients()->toArray();
    }

    public function getIngridientCategories(): array
    {
        return $this->foodplannerReadRepository->getIngridientCategories()->toArray();
    }

    public function getMeals(): array
    {
        return $this->foodplannerReadRepository->getMeals()->toArray();
    }

}