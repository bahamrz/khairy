<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Role;
use Gate; //#Baha

class UsersController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth'); //Protects entire Controller
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        if(Gate::denies('manage-users')){
            return redirect(route('users.index'));
        }

        $users = User::all();
        return view('admin.users.index',compact('users'));

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
        //
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
        if(Gate::denies('edit-users')){
            return redirect(route('users.index'));
        }
        //
        $edituser = User::find($id);
        $roles= Role::all();
        return view ('admin.users.edit',compact('edituser','roles'));
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
        if(Gate::denies('manage-users')){
            return redirect(route('users.index'));
        }
        User::find($id)->roles()->sync($request->roles);
        $updateduser = User::find($id);
        $updateduser->name = request('name');
        $updateduser->email = request('email');

        $updateduser->save();

        // User::find($id)->email = $request-> email;
        // User::find($id)->save();

        return \redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Gate::denies('delete-users')){
            return redirect(route('users.index'));

        }
        //
        User::find($id)->roles()->detach();
        User::find($id)->delete();
        return \redirect()->route('users.index');
    }
}
