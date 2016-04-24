<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Office;

class OfficesController extends Controller
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
        $data['offices'] = Office::all();
        return view('office' , $data);
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
        $request->session()->flash('currtab', 'add_offices');

        // Validation Rules

        $this->validate($request, [
            'office_name' => 'required|max:50',
            'address' => 'required|max:255',
            'building' => 'required|max:50',
            'floor' => 'required|max:10',
            'station' => 'required|max:15',
            
        ]);

        // Validation Success
        $office = new Office;
        $office->office_name = title_case($request->office_name);
        $office->address = title_case($request->address);
        $office->building = title_case($request->building);
        $office->floor = title_case($request->floor);
        $office->station = title_case($request->station);
        $office->save();

        $request->session()->flash('currtab', 'list');
        $request->session()->flash('sys_message_success', trans('messages.insert-success-title',['info'=>'Office']));
        $request->session()->flash('sys_message_content', trans('messages.insert-success-message',['info'=> $office->id ]));

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
