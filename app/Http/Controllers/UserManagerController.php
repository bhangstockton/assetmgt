<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Auth;

class UserManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['users'] = User::orderBy('id','desc')->get();
        return view('usermanager', $data);
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
            'name' => 'required|max:45|',
            'email' => 'required',
        ]);

        $user = new User;
        $user->name = title_case($request->name);
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->createdby = Auth::user()->name;
        $user->save();

        // Set Current Tab
        $request->session()->flash('currtab','list');
        $request->session()->flash('sys_message_success', trans('messages.insert-success-title',['info'=>'User']));
        $request->session()->flash('sys_message_content', trans('messages.insert-success-message',['info'=> $user->id ]));

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
        $data['user'] = User::find($id);
        return view('userProfile',$data);
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
