<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Simpanan;
use Livewire\WithPagination;

class SimpananTable extends Component
{
    // public function render()
    // {
    //     return view('livewire.simpanan-table', [
    //         'simpan' => Simpanan::all()
    //     ]);
    // }

    use WithPagination;

    public $perPage = 5;
    public $search = '';
    public $orderBy = 'id';
    public $orderAsc = true;
    public $anggota;

    public function mount($anggota)
    {
        $this->anggota = $anggota;
    }

    public function render()
    {
        // dd($anggota);
        return view('livewire.simpanan-table', [
            'simpan' => Simpanan::search($this->search)->latest()
                ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                ->simplePaginate($this->perPage),
        ]);
    }
}
