<?php

namespace App\Repositories\read;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

class FoodplannerRepository {

    public function getIngridients(): Collection
    {
        return DB::table('backend_web.admin_fp_ingridients')
            ->select([
                'ingridient_id',
                'ingridient_name',
                'active',
                'created',
                'updated'
            ])
            ->get();
    }

    public function getIngridientCategories(): Collection
    {
        return DB::table('backend_web.admin_fp_ingridients_category')
            ->select([
                'ingridient_category_id',
                'ingridient_category_name',
                'active',
                'created',
                'updated'
            ])
            ->get();
    }

    public function getMeals(): Collection
    {
        return DB::table('backend_web.admin_fp_meals')
            ->select([
                'meal_id',
                'meal_name',
                'active',
                'created',
                'updated'
            ])
            ->get();
    }
}