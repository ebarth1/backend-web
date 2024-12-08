<?php
namespace App\Library\Administration;

use App\Repositories\read\FoodplannerRepository as FoodplannerReadRepository;

class FoodplannerLibrary {

    public function __construct(
        private readonly FoodplannerReadRepository $foodplannerReadRepository
    ){}

    public function getIngridients()
    {
        return $this->foodplannerReadRepository->getIngridients();
    }

    public function getIngridientCategories()
    {
        return $this->foodplannerReadRepository->getIngridientCategories();
    }

    public function getMeals()
    {
        return $this->foodplannerReadRepository->getMeals();
    }

}