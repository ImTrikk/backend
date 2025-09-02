<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CarouselItems;
use App\Http\Requests\CarouselItemsRequest;

class CarouselItemsController extends Controller
{

    public function index()
    {
        return CarouselItems::all();
    }


    public function show(string $id)
    {
        return CarouselItems::findOrFail($id);
    }

    public function store(CarouselItemsRequest $request)
    {
        $validated = $request->validated();
        $carouselItem = CarouselItems::create($validated);
        return $carouselItem;
    }

    public function update(CarouselItemsRequest $request, string $id)
    {
        $validated = $request->validated();
        $carouselItems = CarouselItems::findOrfail($id);
        $carouselItems->update($validated);
        return $carouselItems;
    }

    // delete a row in the databe
    public function destroy(string $id)
    {
        $carouselItem = CarouselItems::findOrFail($id);
        $carouselItem->delete();
        return $carouselItem;
    }
}
        