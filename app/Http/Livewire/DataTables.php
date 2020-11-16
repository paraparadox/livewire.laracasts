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

    public $active = true;
    public $search;
    public $sortField;
    public $sortAsc = true;

    public function sortBy($field)
    {
        if ($field == $this->sortField) {
            $this->sortAsc = !$this->sortAsc;
        } else {
            $this->sortAsc = true;
        }
        $this->sortField = $field;
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
        $users = User::query()
            ->where('active', $this->active)
            ->where(function ($query) {
                $query
                    ->where('name', 'like', '%' . $this->search . '%')
                    ->orWhere('email', 'like', '%' . $this->search . '%');
            })
            ->when($this->sortField, function ($query) {
                $query->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc');
            })
            ->paginate(10);
        return view('livewire.data-tables', compact('users'));
    }

//    The second method to do pagination with overriding the paginateView method:
//    public function paginateView()
//    {
//        return 'livewire.custom-pagination-links-view';
//    }
}
