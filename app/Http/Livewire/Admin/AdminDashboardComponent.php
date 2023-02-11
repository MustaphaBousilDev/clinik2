<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminDashboardComponent extends Component
{
    public $url;
    
    public function render()
    {
        
        $this->url=$_SERVER['REQUEST_URI'];
        $url=$this->url;
        return view('livewire.admin.admin-dashboard-component',['url'=>$url])->layout('layouts.base');
    }
}
