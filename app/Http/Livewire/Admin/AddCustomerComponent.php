<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AddCustomerComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.add-customer-component')->layout('layouts.base');
    }
}
