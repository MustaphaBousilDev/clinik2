<?php

namespace App\Http\Livewire\Admin;
use App\Models\ProductAppoin;
use Livewire\Component;
use Livewire\WithPagination;

class ProductComponent extends Component
{
    use WithPagination;
    public function delete($id){
        ProductAppoin::find($id)->delete();
        return Redirect()->back()->with('success','Product Deleted  Succesfly'); 
        
        
    }
    
    public function render()
    {
        $products=ProductAppoin::all();
        return view('livewire.admin.product-component',['products'=>$products])->layout('layouts.base');
    }
}




?>