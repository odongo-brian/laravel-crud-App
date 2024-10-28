<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        $employees = Employee::all(); // fetches all the employees records
        return view('employees.index', ['employees' => $employees]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'fname' => 'required',
                'lname' => 'required',
                'email' => 'required|email',
                'county' => 'required',
            ]
            );

            $newEmployee  = Employee::create($data); // saving data to db via model

            // return redirect(route('employees.index')); //redirect to index pg after saving data to db


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $id)
    {
        return view('employees.edit', ['employee' => $id]); // Correctly pass the $id variable as 'employee'
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Employee $id, Request $request)
    {
        $data = $request->validate(
            [
                'fname' => 'required',
                'lname' => 'required',
                'email' => 'required|email',
                'county' => 'required',
            ]
            );

            $id ->update($data);
            return redirect(route('employee.index'))->with('success', 'employee updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $id)
    {
        $id->delete();
        return redirect(route('employee.index'))->with('success', 'employee deleted successfully');
    }
}
