<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\TourResource;
use Illuminate\Http\Request;

class TourController extends Controller
{
    public function store(Travel $travel, TourRequest $request) {
        $tour = $travel->tours()->create($request->validated());

        return new TourResource($tour);
    }
}
