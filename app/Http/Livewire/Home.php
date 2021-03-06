<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class Home extends Component
{

    public $products;
    public $categorys;


    public function product_detail($id){

        // $details = Product::find($id);
        
        $this->emit('detail',$id);

    }

    public function mount(){
        $this->products = Product::latest()->get();
        $this->categorys = Category::latest()->get();
    }

    public function render()
    {
        return view('livewire.home',[
            'products' => $this->products,
            'categorys' => $this->categorys
        ]);
    }
}
