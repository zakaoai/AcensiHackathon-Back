<?php

namespace App\Http\Controllers\Salary;

use App\Contracts\Core\Services\ApiResponseService;
use App\Http\Controllers\Controller;
use App\Services\Employee\EmployeeService;
use App\Services\Salary\SalaryService;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class SalaryController extends Controller
{
    private EmployeeService $employeeService;
    private SalaryService $salaryService;
    private ApiResponseService $apiResponseService;

    public function __construct(EmployeeService $employeeService, SalaryService $salaryService, ApiResponseService $apiResponseService)
    {
        $this->employeeService = $employeeService;
        $this->salaryService = $salaryService;
        $this->apiResponseService = $apiResponseService;
    }

    public function show(string $id): JsonResponse
    {
        try {
            $salary = $this->salaryService->findOrFail($id);
            return $this->apiResponseService->success($salary);
        } catch (Exception $e) {
            return $this->apiResponseService->error($e->getMessage());
        }
    }

    public function allSalary(): JsonResponse
    {
        try {
            return $this->apiResponseService->success($this->salaryService->all());
        } catch (Exception $e) {
            return $this->apiResponseService->error($e->getMessage());
        }
    }

    public function search(string $search): JsonResponse
    {
        try {
            $salary = $this->salaryService->where([['employee_id' => $search]]);
            return $this->apiResponseService->success($salary);
        } catch (Exception $e) {
            return $this->apiResponseService->error($e->getMessage());
        }
    }

}
