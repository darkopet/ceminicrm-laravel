<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Nullable;

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
            'email' => null,
            'phone' => null
        ]);

        Employee::create($attributes);

        return redirect('/employees');
    }
}
