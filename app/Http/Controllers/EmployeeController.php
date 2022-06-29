<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('employees.index', [
            'employees' => Employee::paginate(10)
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
        return view('employees.create');
    }
}