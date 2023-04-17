<?php

namespace App\Services\Company;

use App\Repositories\Company\CompanyRepository;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Response as HttpResponse;
use Illuminate\Http\JsonResponse;

class CompanyService
{


    /**
     * Create a new service instance.
     *
     * @param  CompanyRepository  $companyRepository
     * @return void
     */
    public function __construct(private CompanyRepository $companyRepository)
    {
        //
    }

    public function store(array $data)
    {
        return $this->companyRepository->create($data);
    }


    public function getAll()
    {
        return $this->companyRepository->all();
    }

    public function getById($id)
    {
        return $this->companyRepository->findOrFail($id);
    }

    public function update($request,$id):bool|null
    {
        return $this->companyRepository->update($request,$id);
    }

    public function destroy($id):bool|null
    {
        return $this->companyRepository->delete($id);
    }
}
