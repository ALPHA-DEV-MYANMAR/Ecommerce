<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Profile extends Component
{
    use WithFileUploads;

    public $photo;
    public $name;
    public $price;
    public $category;
    public $show_category;
    public $description;
    public $new_category;

    public function mount(){
        $this->show_category = Category::all();
    }

    public function add_cat(){
        Category::create([
            'name' => $this->new_category
        ]);

    }

    public function save()
    {
        //Store to Pulic folder and name for DB
        $filename = $this->photo->store('files','public');

        Product::create([
            'name' => $this->name,
            'price' => $this->price,
            'category' => $this->category,
            'description' => $this->description,
            'gallery' => $filename,
        ]);

        $this->name = '';
        $this->photo = '';
        $this->price = '';
        $this->category = '';
        $this->description= '';

        return redirect(route('profile'));

    }
    
    public function render()
    {
        return view('livewire.profile',[
            'show_category' => $this->show_category
        ]);
    }
}
