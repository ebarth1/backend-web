<?php

namespace App\Http\Controllers\Administration;

use App\Http\Controllers\Controller;
use App\Library\Administration\FoodplannerLibrary;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpFoundation\Response;


class FoodplannerController extends Controller {

    public function __construct(
        private readonly FoodplannerLibrary $foodplannerLibrary
    ){}

    public function getIngridients(): JsonResponse
    {
        return response()->json([
            "status" => Response::HTTP_OK,
            "message" => "ingridients loaded successfull!",
            "data" => $this->foodplannerLibrary->getIngridients()
    ]);
    }

    public function getIngridientCategories():JsonResponse
    {
        return response()->json([
            "status" => Response::HTTP_OK,
            "message" => "ingridient-categories loaded successfull!",
            "data" => $this->foodplannerLibrary->getIngridientCategories()
        ]);
    }

    public function getMeals(): JsonResponse
    {
        return response()->json([
            "status" => Response::HTTP_OK,
            "message" => "meals loaded successfull!",
            "data" => $this->foodplannerLibrary->getMeals()
        ]);
    }
}