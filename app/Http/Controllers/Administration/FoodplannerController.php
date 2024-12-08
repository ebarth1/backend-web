<?php

namespace App\Http\Controllers\Administration;

use App\Http\Controllers\Controller;
use App\Library\Administration\FoodplannerLibrary;


class FoodplannerController extends Controller {

    public function __construct(
        private readonly FoodplannerLibrary $foodplannerLibrary
    ){}

    public function getIngridients()
    {
        return response()->json($this->foodplannerLibrary->getIngridients());
    }

    public function getIngridientCategories()
    {
        return response()->json($this->foodplannerLibrary->getIngridientCategories());
    }

    public function getMeals()
    {
        return response()->json($this->foodplannerLibrary->getMeals());
    }
}