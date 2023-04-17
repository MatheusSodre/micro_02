<?php

namespace App\Http\Controllers\Api\Company;

use App\Http\Controllers\Controller;
use App\Http\Requests\Company\StoreUpdateCompany;
use App\Http\Resources\Company\CompanyResource;
use Illuminate\Support\Facades\Response;
use App\Services\Company\CompanyService;
use Illuminate\Http\Response as HttpResponse;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class CompanyController extends Controller
{
    /**
     * @param CompanyService $companyService
     *
     */
    public function __construct(private CompanyService $companyService)
    {
        $this->companyService = $companyService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index():JsonResponse
    {
        return Response::json(CompanyResource::collection($this->companyService->getAll()),HttpResponse::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUpdateCompany $request):JsonResponse
    {
        return Response::json(new CompanyResource($this->companyService->store($request->validated())),HttpResponse::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id):JsonResponse
    {
        return Response::json(new CompanyResource($this->companyService->getById($id)),HttpResponse::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreUpdateCompany $request, string $id):JsonResponse
    {
        return Response::json($this->companyService->update($request->validated(),$id),HttpResponse::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id):JsonResponse
    {
        return Response::json($this->companyService->destroy($id),HttpResponse::HTTP_NO_CONTENT);
    }
}
