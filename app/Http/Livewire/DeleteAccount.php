<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class DeleteAccount extends Component
{
    public function mount($id){
        $deleteuser = User::findOrFail($id);
        $deleteuser->delete();
        return redirect('/');
    }

    public function render()
    {
        return view('livewire.delete-account');
    }
}
