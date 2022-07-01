<?php

namespace App\Http\Controllers;

use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {   
        $search = $_GET['search'] ?? '';
        return view('employees.index', [
            'employees' => Employee::paginate(30),
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
        return view('employees.create');

            // $errors = [];
            
            // $EmployeeData = [
            //     'firstName' => '',
            //     'lastName' => '',
            //     'company_id' => '',
            //     'email' => '',
            //     'phone' => ''
            // ];
            //         echo "<br><pre>";
            //         var_dump($EmployeeData);
            //         echo "</pre><br><br>";
            //         echo "<pre>";
            //         var_dump($_SERVER);
            //         echo "</pre><br><br>";
            //         echo "<pre>";
            //         var_dump($_GET);
            //         echo "</pre><br><br>";
            //         echo "<pre>";
            //         var_dump($_POST);
            //         echo "</pre><br><br>";
            // # Loading data from the $_POST and $_FILES via the controller
            // if ($_SERVER['REQUEST_METHOD'] === 'POST') 
            // {
            //     $EmployeeData['firstName'] = $_POST['firstName'];
            //     $EmployeeData['lastName'] = $_POST['lastName'];
            //     $EmployeeData['company_id'] = (int)$_POST['company_id'];
            //     $EmployeeData['email'] = $_POST['email'] ?? null;
            //     $EmployeeData['phone'] = $_POST['phone'] ?? null;

            //     # Instance of the class Employee created before
            //     $Employee = new Employee();
            //     # Loading into the model    
            //     $Employee->load($EmployeeData);
                
            //     $errors = $Employee->save();

            //     if(empty($errors)){ 
            //         return view('employees.create');
            //     }
            // }
    } 

    public function store()
    {
        $attributes = request()->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'company_id' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);

        Employee::create($attributes);

        return redirect('/employees');
    }

    public function edit(Employee $employee)
    {
        return view('employees.edit', ['employee' => $employee]);
    }

    public function update(Employee $employee)
    {
        $attributes = request()->validate([
            'firstName' => 'required',
            'lastName' => 'image',
            'company_id' => 'required',
            'email' => 'required',
            'phone' => 'required'
            // 'category_id' => ['required', Rule::exists('categories', 'id')]
        ]);

        // if (isset($attributes['thumbnail'])) {
        //     $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');

        $employee->update($attributes);
        return back();
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();
        return back()->with('success', 'Employee off.');
    }
}
