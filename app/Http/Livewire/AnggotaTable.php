<?php

namespace App\Http\Livewire;

use App\Models\Anggota;
use Livewire\Component;
use Livewire\WithPagination;

class AnggotaTable extends Component
{
    use WithPagination;

    public $perPage = 10;
    public $search = '';
    public $orderBy = 'created_at';
    public $orderAsc = false;

    public function render()
    {
        return view('livewire.anggota-table', [
            'anggotas' => Anggota::search($this->search)
                ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                ->simplePaginate($this->perPage),
        ]);
    }
}
