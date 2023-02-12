<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\ProductAppoin;
class Showproductcomponent extends Component
{
    public $name;
    public $product;
    public function mount($id){
        $this->product=ProductAppoin::where('id',$id)->first();
        //$this->name=$this->product->name;
        
    }

    public function render()
    {
        return view('livewire.admin.showproductcomponent',['product'=>$this->product])->layout('layouts.base');
    }
}
