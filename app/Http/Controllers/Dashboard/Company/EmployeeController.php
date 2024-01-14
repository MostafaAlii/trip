<?php

namespace App\Http\Controllers\Dashboard\Company;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Dashboard\{Companies\EmployeeService,General\GeneralService};
use App\DataTables\Dashboard\Company\EmployeeDataTable;
use App\Http\Requests\Dashboard\Company\EmployeeRequestValidation;
class EmployeeController extends Controller
{
    public function __construct(protected EmployeeDataTable $dataTable, protected EmployeeService $employeeService, protected GeneralService $generalService) {
        $this->dataTable = $dataTable;
        $this->employeeService = $employeeService;
        $this->generalService = $generalService;
    }
    
    public function index() {
        $data = [
            'title' => 'Employees',
            'countries' => $this->generalService->getCountries(),
        ];
        return $this->dataTable->render('dashboard.company.employees.index',  compact('data'));
    }

    public function store(EmployeeRequestValidation $request) {
        //dd($request->all());
        try {
            $requestData = $request->validated();
            $this->employeeService->create($requestData);
            return redirect()->route('companyEmployees.index')->with('success', 'employee created successfully');
        } catch (\Exception $e) {
            return redirect()->route('companyEmployees.index')->with('error', 'An error occurred while creating the employee');
        }
    }

    public function update(EmployeeRequestValidation $request, $employeeId) {
        try {
            $requestData = $request->validated();
            $this->employeeService->update($employeeId, $requestData);
            return redirect()->route('companyEmployees.index')->with('success', 'employee updated successfully');
        } catch (\Exception $e) {
            return redirect()->route('companyEmployees.index')->with('error', 'An error occurred while updating the employee');
        }
    }

    public function updatePassword(Request $request, $employeeId) {
        try {
            $this->employeeService->updatePassword($employeeId, $request->password);
            return redirect()->route('companyEmployees.index')->with('success', 'employee password updated successfully');
        } catch (\Exception $e) {
            return redirect()->route('companyEmployees.index')->with('error', 'An error occurred while updating the employee password');
        }
    }

    public function destroy($id) {  
        try {
            $this->employeeService->delete($id);
            return redirect()->route('companyEmployees.index')->with('success', 'employee deleted successfully');
        } catch (\Exception $e) {
            return redirect()->route('companyEmployees.index')->with('error', 'An error occurred while deleting the employee');
        }
    }
}
