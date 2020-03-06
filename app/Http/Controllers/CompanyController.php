<?php

namespace App\Http\Controllers;

use App\Company;
use App\Employee;
use App\Position;
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
//
        $companyId = Auth::guard('company')->user()->id;
        $company = Company::select()->where('id', $companyId)->get();
        return view('company.index', ['company' => $company[0]]);
//        dd($company);
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
        return redirect('/company/login');
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
            return redirect('/company/index');
        }
        return redirect()->back()->withErrors('Email or password not valid');
//        return 'wrong credentials';
//        $company = Company::select()->where('email', request('email'))->get();
////        var_dump($company->isEmpty());die;
//        if($company->isEmpty()){
//            return redirect('company/login');
//        }
//        return redirect('company/index');
////        var_dump($company);
    }

    public function positions(){
        $companyId = Auth::guard('company')->user()->id;
//        var_dump($companyId);die;
//        $positions = Position::all();
        $positions = Position::all()->where('company_id', $companyId);
        $company = Company::select()->where('id', $companyId)->get();
//        echo '<pre>';
//        var_dump(count($positions));die;
//        return view("position.index")->with('positions', $positions);
//        return view("position.index",compact(['positions' => $positions /*, 'company' => $company[0]*/]));
        return view("position.index")->with('positions', $positions)->with('company', $company[0]);
//        return redirect('/company/index', compact($positions));
    }

    public function positionCreate(){
        $companyId = Auth::guard('company')->user()->id;
        $company = Company::select()->where('id', $companyId)->get();
        return view("position.add")->with('company', $company[0]);
    }

    public function positionAdd(){
        $companyId = Auth::guard('company')->user()->id;
        $this->validate(
            request(), [
                'name' => 'required|unique:positions',
                'description' => 'required',

            ]
        );
        Position::create([
            'name' => request('name'),
            'description' => request('description'),
            'company_id' => $companyId,
        ]);
        return redirect('/company/positions');
    }

    public function positionEdit($id){
//        dd($id);
        $companyId = Auth::guard('company')->user()->id;
        $company = Company::select()->where('id', $companyId)->get();
        $position = Position::find($id);
//        if(auth()->user()->id !== $recipe->user_id){
//            return redirect("/")->with('error', "You are not authorized to perform that action");
//        }else{
        return view("position.edit")->with('position', $position)->with('company', $company[0]);
    }

    public function positionUpdate($id){
        $companyId = Auth::guard('company')->user()->id;
        $this->validate(
            request(), [
                'name' => 'required',
                'description' => 'required'
            ]
        );
        $position = Position::find($id);
        $position->name = request('name');
        $position->description = request('description');
        $position->company_id = $companyId;
        $position->save();
        return redirect('/company/positions')->with('Status', 'Successful');
    }

    public function positionDelete($id){
        $companyId = Auth::guard('company')->user()->id;
        $position = Position::find($id);
        $position->delete();
        return redirect('/company/positions')->with('Status', 'Successful');
    }

    /**
     * --------------- EMPLOYEES -----------------
     */
    public function employees(){
        $companyId = Auth::guard('company')->user()->id;
        $employees = Employee::all()->where('company_id', $companyId);
        $company = Company::select()->where('id', $companyId)->get();
        foreach ($employees as $employee){
            $position = Position::find($employee->position_id);
//            dd($position->name);
            $employee->position = $position->name;
        }
        return view("employee.index")
            ->with('employees', $employees)
            ->with('company', $company[0]);
//        return redirect('/company/index', compact($positions));
    }

    public function employeeCreate(){
        $companyId = Auth::guard('company')->user()->id;
        $company = Company::select()->where('id', $companyId)->get();
        $positions = Position::all()->where('company_id', $companyId);
        return view("employee.add")->with('company', $company[0])
            ->with('positions', $positions);
    }

    public function employeeAdd(){
        $companyId = Auth::guard('company')->user()->id;
//        echo '<pre>';
//       var_dump(request()->position);
//        dd(request()->firstname);
        $this->validate(
            request(), [
                'firstname' => 'required',
                'lastname' => 'required',
                'egn' => 'required',
                'salary' => 'required',
                'email' => 'required|email|unique:employees',
            ]
        );
        Employee::create([
            'firstname' => request('firstname'),
            'lastname' => request('lastname'),
            'egn' => request('egn'),
            'salary' => request('salary'),
            'email' => request('email'),
            'is_active' => 1,
            'position_id' => (int) request()->position,
            'company_id' => $companyId,
        ]);
        return redirect('/company/employees');
    }

    public function employeeEdit($id){
//        dd($id);
        $companyId = Auth::guard('company')->user()->id;
        $company = Company::select()->where('id', $companyId)->get();
        $employee = Employee::find($id);
        $positions = Position::all()->where('company_id', $companyId);
//        if(auth()->user()->id !== $recipe->user_id){
//            return redirect("/")->with('error', "You are not authorized to perform that action");
//        }else{
        return view("employee.edit")
            ->with('employee', $employee)
            ->with('company', $company[0])
            ->with('positions', $positions);
    }

    public function employeeUpdate($id){
        $companyId = Auth::guard('company')->user()->id;
        $this->validate(
            request(), [
                'firstname' => 'required',
                'lastname' => 'required',
                'egn' => 'required',
                'salary' => 'required',
                'email' => 'required|email',
            ]
        );
        $employee = Employee::find($id);
        $employee->firstname = request('firstname');
        $employee->lastname = request('lastname');
        $employee->egn = request('egn');
        $employee->salary = request('salary');
        $employee->email = request('email');
        $employee->is_active = 1;
        $employee->position_id = (int) request()->position;
//        dd($employee);
        $employee->save();
        return redirect('/company/employees');
    }

    public function employeeToggleBlock($id){
        $companyId = Auth::guard('company')->user()->id;
        $employee = Employee::find($id);
        $employee->is_active = $employee->is_active === 1 ? 0 : 1;
//        dd($employee);
        $employee->save();
        return redirect('/company/employees');
    }

    public function employeeDelete($id){
        $companyId = Auth::guard('company')->user()->id;
        $employee = Employee::find($id);
        $employee->delete();
        return redirect('/company/employees')->with('Status', 'Successful');
    }

}
