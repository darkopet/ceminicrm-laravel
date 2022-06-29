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

    public function create()
    {   
        return view('companies.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required',
            'email' => 'required',
            'logo' => 'required',
            'website' => null
        ]);

        Company::create($attributes);

        return redirect('/employees');
    }
}
