<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Employee;

class EmployeesController extends Controller
{
    public function index()
    {
        return view('employees.index', [
            'employees' => Employee::latest()->paginate(10)
        ]); 
    }  
    public function show(Employee $employee)
    {
        return view('employees.show', [
            'employee' => $employee
        ]);
    }
}