<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Http\Resources\ProductResource;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct(protected ProductRepository $repository) {}

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = $this->repository->search();

        return ProductResource::collection($list);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $model = $this->repository->store($request->validated());

        return new ProductResource($model);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $model = $this->repository->getById($id);

        return new ProductResource($model);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, string $id)
    {
        $model = $this->repository->update($id, $request->validated());

        return new ProductResource($model);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->repository->destroy($id);

        return response()->noContent();
    }
}
