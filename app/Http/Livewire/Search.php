<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class Search extends Component
{

    public $products;
    public $categorys;

    public function mount($name){
        $this->products = Product::where('category',$name)->latest()->get();
        $this->categorys = Category::latest()->get();
    }

    public function render()
    {
        return view('livewire.search',[
            'products' => $this->products,
            'categorys' => $this->categorys
        ]);
    }
}
