<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {   
        $search = $_GET['search'] ?? '';
        return view('employees.index', [
            'employees' => Employee::paginate(10),
            'search' => $search
        ]); 
    }

    public function show(Employee $employee)
    {
        return view('employees.show', [
            'employee' => $employee
        ]);
    }

    public function create()
    {   
         $errors = [];
            
            $EmployeeData = [
                'firstName' => '',
                'lastName' => '',
                'company_id' => '',
                'email' => '',
                'phone' => ''
            ];
            
            # Loading data from the $_POST and $_FILES via the controller
            if ($_SERVER['REQUEST_METHOD'] === 'POST') 
            {
                $EmployeeData['firstName'] = $_POST['firstName'];
                $EmployeeData['lastName'] = $_POST['lastName'];
                $EmployeeData['company_id'] = (int)$_POST['company_id'];
                $EmployeeData['email'] = $_POST['email'] ?? null;
                $EmployeeData['phone'] = $_POST['phone'] ?? null;

                # Instance of the class Employee created before
                $Employee = new Employee();
                # Loading into the model    
                $Employee->load($EmployeeData);
                
                $errors = $Employee->save();

                if(empty($errors)){ 
                    return view('employees.create');
                }
            }
    }
}
