<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Supplier;


class SuppliersController extends Controller
{
    public function __construct()
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
        $data['suppliers'] = Supplier::orderBy('id', 'desc')->get();
        return view('supplier', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
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

        $request->session()->flash('currtab','new');

        $this->validate($request, [
            'name' => 'reuired|max:255',
            'address1' => 'required|max:255',
    ]);
    
        // Validation Success
        $suppliers = new Supplier;
        $suppliers->name = title_case($request->name);
        $suppliers->address1 = title_case($request->address1);
        $suppliers->save();

        $request->session()->flash('currtab', 'list');
        $request->session()->flash('sys_message_success', trans('messages.insert-success-title', ['info'=>'Supplier']));
        $request->session()->flash('sys_message_content', trans('messages.insert-success-message', ['info'=> $suppliers->id ]));

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
