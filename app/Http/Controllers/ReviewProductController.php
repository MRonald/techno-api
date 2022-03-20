<?php

namespace App\Http\Controllers;

use App\Models\ReviewProduct;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ReviewProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return response()->json(ReviewProduct::with('product')->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $reviewProduct = new ReviewProduct();
        $reviewProduct->fill($request->all());
        $reviewProduct->save();

        return response()->json(['message' => 'created successfully'], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param ReviewProduct $reviewProduct
     * @return JsonResponse
     */
    public function show(ReviewProduct $reviewProduct): JsonResponse
    {
        return response()->json($reviewProduct);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param ReviewProduct $reviewProduct
     * @return JsonResponse
     */
    public function update(Request $request, ReviewProduct $reviewProduct): JsonResponse
    {
        $reviewProduct->update($request->all());

        return response()->json(['message' => 'updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param ReviewProduct $reviewProduct
     * @return JsonResponse
     */
    public function destroy(ReviewProduct $reviewProduct): JsonResponse
    {
        $reviewProduct->delete();

        return response()->json(['message' => 'deleted successfully']);
    }
}
