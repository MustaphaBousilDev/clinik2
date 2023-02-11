<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use function dd;

class EmployeeRegistrationComponent extends Component
{
    public $employees;
    public function render()
    {
        return view('livewire.admin.employee-registration-component')->layout('layouts.base');
    }
    public function mount()
    {
        $this->employees = User::where('utype', '=', 'EMP')->get();
        /*        dd($this->employees);*/
    }
}
