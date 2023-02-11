<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use function compact;
use function dd;
use function public_path;
use function redirect;
use function session;
use function time;
use function view;

class EmployeeController extends Controller
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
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'second_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required','min:8'],
            'role'=>['required','string','max:3','min:3','in:ADM,EMP,USR']
        ]);

        $user = User::create([
            'name' => $request->first_name." ".$request->second_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'utype'=>$request->role,
        ]);
        $user->utype ='EMP';
        $user->save();
        /*event(new Registered($user));*/

        return redirect()->route("admin.employee");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('employee-show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $data = [
            'user' => $user
        ];
        return view('livewire.admin.edit-employee-component',compact('data'))->layout('layouts.base');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'second_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required'],
            'role'=>['required','string','max:3','min:3','in:ADM,EMP,USR']
        ]);
        $user->name = $request->input('first_name')." ".$request->input('second_name');
        $user->email= $request->input('email');
        $user->password = $request->input('password');

        $user->save();

        session()->flash('message', 'Employee information updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user= User::find($id);
        $user->delete();
        session()->flash('message', 'Employee deleted successfully.');
        return redirect()->route("admin.employee");
    }


    public function print(User $user)
    {
        // TODO: print algo
    }
}
