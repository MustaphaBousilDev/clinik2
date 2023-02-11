<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AddEmployeeComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.add-employee-component')->layout('layouts.base');
    }
}
