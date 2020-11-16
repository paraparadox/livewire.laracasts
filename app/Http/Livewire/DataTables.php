<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class DataTables extends Component
{
    use WithPagination;

//    The first method to do pagination with bootstrap:
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $users = User::paginate(10);
        return view('livewire.data-tables', compact('users'));
    }

//    The second method to do pagination with overriding the paginateView method:
//    public function paginateView()
//    {
//        return 'livewire.custom-pagination-links-view';
//    }
}
