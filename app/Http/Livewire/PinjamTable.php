<?php

namespace App\Http\Livewire;

use App\Models\Pinjam;
use Livewire\Component;
use Livewire\WithPagination;

class PinjamTable extends Component
{
    use WithPagination;

    public $perPage = 5;
    public $search = '';
    public $orderBy = 'id';
    public $orderAsc = true;

    public function render()
    {
        return view('livewire.pinjam-table', [
            'pinjams' => Pinjam::search($this->search)->latest()
                ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                ->simplePaginate($this->perPage),
        ]);
    }
}
