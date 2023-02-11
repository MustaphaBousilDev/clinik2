<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use function explode;

class ViewEmployeeInfo extends Component
{
    public $employee;
    public $first_name;
    public $second_name;
    public $role;
    public $email;
    public $password;

    public function render()
    {
        return view('livewire.admin.view-employee-info')->layout('layouts.base');
    }

    public function mount(User $employee){
        $this->employee=$employee;
        $this->first_name=explode(" ",$employee->name)[0];
        $this->second_name=explode(" ",$employee->name)[1];
        $this->role=$employee->utype;
        $this->email=$employee->email;
        $this->password=$employee->password;
    }

}
