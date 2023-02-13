<?php

namespace App\Http\Livewire\Admin;
use Carbon\Carbon;
use  App\Models\User;
use Livewire\Component;
use Auth;
use App\Models\ProductAppoin;
use Illuminate\Support\Str;


class EditProductComponent extends Component
{
    public $name;
    public $unity;
    public $quantity;
    public $user;
    public $product_id;
    public function mount($id){
        $product=ProductAppoin::where('id',$id)->first();
        $this->name=$product->name;
        $this->unity=$product->unity;
        $this->quantity=$product->quantity;
        $this->user=$product->user_id;
        $this->product_id=$product->id;
    }
    function updateproduct(){
        $product=ProductAppoin::find($this->product_id);
        $product->name=$this->name;
        $product->unity=$this->unity;
        $product->quantity=$this->quantity;
        $product->user_id=Auth::user()->id;
        $product->save();
        session()->flash('message','Product Has Been Updating Succesufly');
        return redirect()->route("admin.products");
    }
    public function render()
    {
        return view('livewire.admin.edit-product-component')->layout('layouts.base');
    }
}
