<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {   
        $search = $_GET['search'] ?? '';
        return view('companies.index', [
            'companies' => Company::paginate(10),
            'search' => $search
        ]); 
    }

    public function show(Company $company)
    {
        return view('companies.show', [
            'company' => $company
        ]);
    }
}
