<?php
namespace App\Http\Livewire;

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UsersIndex extends Component
{
    protected $paginationTheme = "bootstrap";

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {
        $users = User::all();
        return view('livewire.users-index', ['users' => $users]);
    }
}
