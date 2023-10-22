<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CarouselItems;

class CarouselItemsController extends Controller
{
    /** 
     * Display a listing of the resource.
     */
    public function index()
    {
        return CarouselItems::all();    
    }

    
    public function show(string $id)
    {
        return CarouselItems::findOrFail($id);
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $carouselItem = CarouselItems::findOrFail($id);

        $carouselItem->delete();

        return $carouselItem;
    }
}
