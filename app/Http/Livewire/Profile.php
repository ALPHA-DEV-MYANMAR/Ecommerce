<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
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
    //For Add Category
    public $new_category;
    //User Account Control
    public $username;
    public $email;
    public $show_user;


    public function mount(){
        $this->show_category = Category::all();
        //User account control
        $this->show_user = User::find(Auth::user()->id);
        $this->email = $this->show_user->email;
        $this->username = $this->show_user->name;
    }

    public function update(){
        $this->validate([
            'email' => 'required|email',
            'username' => 'required|max:10'
        ]);

        $update_user = User::find(Auth::user()->id);

        $update_user->update([
            'name' => $this->username,
            'email' => $this->email
        ]);

        session()->flash('message', 'Account successfully updated 😃');

    }

    public function add_cat(){

        $this->validate([
            'new_category' => 'required'
        ]);

        Category::create([
            'name' => $this->new_category
        ]);

        $this->new_category = '';

        return redirect('/profile');
    }

    public function save()
    {
        $this->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'photo' => 'required|image'
        ]);

        //Store to Public folder and name for DB
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

        session()->flash('message', 'Product successfully created 😃');

        $this->redirect('/');

    }
    
    public function render()
    {
        return view('livewire.profile',[
            'show_category' => $this->show_category,
            'show_user' => $this->show_user,
            'email' => $this->email,
            'username' => $this->username
        ]);
    }
}
