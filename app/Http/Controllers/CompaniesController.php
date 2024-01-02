<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Rules\PhoneNumber;
use Illuminate\Http\Request;


class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $companies = Company::orderbydesc('created_at')->paginate(10);
       return view("companies.index", [
        "companies"=> $companies
       ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view("companies.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $data=$request->validate([
        'name'=>'bail|required|min:5|unique:App\Models\Company,address',
        'address'=>['required','unique:App\Models\Company,address'],
        'phone'=>['required','numeric','unique:App\Models\Company,phone',new PhoneNumber()],
        
      ]);
      Company::create($data);
      return redirect()->route('companies.index')->with('success','444444444');
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
       return view('companies.show', ['company'=> $company]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        return view('companies.edit',['company'=>$company]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Company $company)
    {
        $data=$request->validate([
            'name'=>'bail|required|min:5|unique:App\Models\Company,address',
            'address'=>'required',
            'phone'=>['required','numeric',new PhoneNumber()],
            
          ]);
         $company->update($data);
          return redirect()->route('companies.index')->with('success','444444444');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        
         $company->delete();
          return redirect()->route('companies.index')->with('success','444444444');
    }
}
