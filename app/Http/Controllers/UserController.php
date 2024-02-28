<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $perPage = $request->input('perPage', 5); // Get the number of records per page from the request, default is 5
    
        $users = User::where('role', 'user')->paginate($perPage); // Paginate the users with the specified number of records per page
    
        return view('dashbord.gestion_user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
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
        return view(
            'dashbord.gestion_user.edit',
            ['user' => User::findOrFail($id)]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $user)
    {
        $to_update = User::findOrFail($user);

        $to_update->name = $request->input('name_user');
        $to_update->email = $request->input('email_user');
        $to_update->adress = $request->input('adress_user');
        $to_update->date_born = $request->input('date_born_user');
        $to_update->phone = $request->input('phone_user');
        $to_update->gender = $request->input('gender_user');

        $to_update->save();
        
        return redirect()->route('gestion_user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $to_delete = User::findOrFail($id);
        $to_delete->delete();
        return redirect()->route('gestion_user.index');
    }
}
