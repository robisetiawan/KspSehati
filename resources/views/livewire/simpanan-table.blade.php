<div>
    <div class="row mb-3">
        <div class="col-sm-4">
            <input wire:model.debounce.300ms="search" type="text" class="form-control" placeholder="ex : 2022-06-08">
        </div>
        <div class="col-sm-3">
            <select wire:model="orderBy" class="form-select" id="grid-state">
                <option value="created_at">Tgl Simpan</option>
                <option value="jmlh_simpwj">Jumlah Simpanan per tgl</option>
                <option value="simp_wj">Nominal</option>
            </select>
            {{-- <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                </svg>
            </div> --}}
        </div>
        <div class="col-sm-3">
            <select wire:model="orderAsc" class="form-select" id="grid-state">
                <option value="1">Terlama</option>
                <option value="0">Terbaru</option>
            </select>
            {{-- <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                </svg>
            </div> --}}
        </div>
        <div class="col-sm-2">
            <select wire:model="perPage" class="form-select" id="grid-state">
                <option>5</option>
                <option>10</option>
                <option>25</option>
                <option>50</option>
                <option>100</option>
            </select>
            {{-- <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                </svg>
            </div> --}}
        </div>
    </div>
    <table class="table table-bordered table-xxs text-center">
        <thead class="table-primary">
            <tr>
                <th scope="col">Tgl Simpan</th>
                <th scope="col">Jumlah Simpanan per tgl</th>
                <th scope="col">Nominal</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($simpan->where('anggota_id', $anggota) as $s)
                <tr>
                    <td class="border px-4 py-2">{{ $s->created_at->format('d M Y') }}</td>
                    <td class="border px-4 py-2"><b>@currency($s->jmlh_simpwj)</b> per {{ $s->created_at->format('d M Y') }}
                    </td>
                    <td class="border px-4 py-2">@currency($s->simp_wj)</td>
                    {{-- <td class="border px-4 py-2">{{ $s->created_at->diffForHumans() }}</td> --}}
                </tr>
            @endforeach
        </tbody>
    </table>
    {!! $simpan->links() !!}
</div>
