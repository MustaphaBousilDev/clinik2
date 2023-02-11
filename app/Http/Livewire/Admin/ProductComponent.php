<?php

namespace App\Http\Livewire\Admin;
use App\Models\ProductAppoin;
use Livewire\Component;
use Livewire\WithPagination;

class ProductComponent extends Component
{
    use WithPagination;
    public function deleteProduct($id){
        $product=ProductAppoin::find($id);
        dd($product);
        $product->delete();
        session()->flash('message','Product Fucking Success Deleting');
    }
    public function DeleteBrand($id){
        ProductAppoin::find($id)->delete();
        return Redirect()->back()->with('success','Brand Deleted  Succesfly');
    }
    public function render()
    {
        $products=ProductAppoin::paginate(4);
        return view('livewire.admin.product-component',['products'=>$products])->layout('layouts.base');
    }
}




?>