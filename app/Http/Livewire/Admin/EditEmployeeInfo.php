<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use function dd;
use function explode;

class EditEmployeeInfo extends Component
{
    public $employee;
    public $first_name;
    public $second_name;
    public $role;
    public $email;
    public $password;
    public $confirm_password;
    public $new_password;
    public function render()
    {
        return view('livewire.admin.edit-employee-info')->layout('layouts.base');
    }

    public function mount(User $employee){
        $this->employee=$employee;
        $this->first_name=explode(" ",$employee->name)[0];
        $this->second_name=explode(" ",$employee->name)[1];
        $this->role=$employee->utype;
        $this->email=$employee->email;
        $this->password=$employee->password;
    }
    public function updateInfo(){
        $this->validate([
            'first_name'=>'required',
            'second_name'=>'required',
            'role'=>['required','string','max:3','min:3','in:ADM,EMP,USR'],
            'email'=>'required|email',
            'new_password'=>'',
            'confirm_password'=>'same:new_password'
        ]);
        $this->employee->name=$this->first_name." ".$this->second_name;
        $this->employee->utype=$this->role;
        $this->employee->email=$this->email;
        if(!empty($this->new_password))$this->employee->password=Hash::make($this->new_password);
        $this->employee->save();
        session()->flash('message','Employee Info Updated Successfully');
        $this->back();
    }

    public function back(){
        return redirect()->route('admin.employee');
    }
}
