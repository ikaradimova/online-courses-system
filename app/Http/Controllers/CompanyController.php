<?php

namespace App\Http\Controllers;

use App\Company;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @param $data
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //
    }

    public function register(){
        $this->validate(
            request(), [
                'bulstat' => 'required|unique:companies',
                'name' => 'required|unique:companies',
                'manager' => 'required',
                'email' => 'required|email|unique:companies',
                'password' => 'required',
                'confirmPassword' => 'required|same:password'
            ]
        );
        Company::create([
            'bulstat' => request('bulstat'),
            'name' => request('name'),
            'manager' => request('manager'),
            'email' => request('email'),
            'password' => Hash::make(request('password')),
        ]);
        return redirect('/company/index')->with('Status', 'Successful register');
//        return view('company.register');
//        die('тест');
//        return Company::create([
//            'bulstat' => $data['bulstat'],
//            'name' => $data['name'],
//            'manager' => $data['manager'],
//            'email' => $data['email'],
//            'password' => Hash::make($data['password']),
//        ]);
    }

    public function login(){
        $this->validate(
            request(), [
                'email' => 'required|email',
                'password' => 'required'
            ]
        );
//        dd(Auth::guard('company')->attempt(['email' => request('email'), 'password' => request('password')]));
        if(Auth::guard('company')->attempt(['email' => request('email'), 'password' => request('password')])){
            return 'login successful';
        }
        return 'wrong credentials';
//        $company = Company::select()->where('email', request('email'))->get();
////        var_dump($company->isEmpty());die;
//        if($company->isEmpty()){
//            return redirect('company/login');
//        }
//        return redirect('company/index');
////        var_dump($company);
    }
}
