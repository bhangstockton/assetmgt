<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Employee;
use Auth;

class EmployeeController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    public function index()
    {
        $data['employees'] = Employee::orderBy('id','desc')->get();
        return view('employees', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\m_responsekeys(conn, identifier)
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Set Current Tab
        $request->session()->flash('currtab', 'new');

        $this->validate($request, [
            'lastname' => 'required|max:50',
            'firstname' => 'required|max:50',
            'middlename' => 'required|max:50',
            'suffix' => 'max:4',
            'sex' => 'required',
            'position' => 'required|max:50',
            'remarks' => 'max:255',
        ]);

        // Validation Success
        $employee = new Employee;
        $employee->lastname = title_case($request->lastname);
        $employee->firstname = title_case($request->firstname);
        $employee->middlename = title_case($request->middlename);
        $employee->suffix = strtoupper($request->suffix);
        $employee->sex = $request->sex;
        $employee->position = title_case($request->position);
        $employee->remarks = $request->remarks;
        $employee->createdby = Auth::user()->email;
        $employee->save();

        $request->session()->flash('currtab', 'list');
        $request->session()->flash('sys_message_success', trans('messages.insert-success-title',['info'=>'Employee']));
        $request->session()->flash('sys_message_content', trans('messages.insert-success-message',['info'=> $employee->id ]));

        return redirect()->back();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
