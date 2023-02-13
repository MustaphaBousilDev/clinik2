<?php

namespace App\Http\Livewire\Admin;
use  App\Models\User;
use Livewire\Component;
use Auth;
use App\Models\ProductAppoin;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
class AddProductComponent extends Component
{
    public $name;
    public $unity;
    public $quantity;
    public $slug;
    public $user;
    public function generateSlug(){
        $this->slug=Str::slug($this->name,'-');
    }
    public function addproduct(){
        
        $product=new ProductAppoin();
        $product->name=$this->name;
        $product->unity=$this->unity;
        $product->quantity=$this->quantity;
        $product->user_id=Auth::user()->id;
        $product->save();
        session()->flash('message','Product Has Been Created Successfully!');
        return redirect()->route("admin.products");
    }
    public function render(){
        
        
        return view('livewire.admin.add-product-component')->layout('layouts.base');
    }
}
