<div>
    <div class="row mb-3">
        <div class="col-sm-4">
            <input wire:model.debounce.300ms="search" type="text" class="form-control" placeholder="ex : 2022-06-08">
        </div>
        <div class="col-sm-3">
            <select wire:model="orderBy" class="form-select" id="grid-state">
                <option value="created_at">Tgl Pinjam</option>
                <option value="nilai_pinj">Nilai Pinjam</option>
                <option value="pk_kem">Pokok Kembali</option>
                <option value="angsuran">Angsuran</option>
                <option value="bunga">Bunga</option>
                <option value="bunga_margin">Bunga Margin</option>
                <option value="pk_marg">Pokok + Margin</option>
                <option value="jumlah_angs">Jumlah Angs</option>
                <option value="admin_total">Admin</option>
                <option value="harga_acuan">Harga Acuan</option>
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
                {{-- <th scope="col">No</th> --}}
                <th scope="col">Tgl Pinj</th>
                <th scope="col">Pinjaman</th>
                <th scope="col">Pk Kembali</th>
                <th scope="col">Angs</th>
                <th scope="col">Bunga</th>
                <th scope="col">Bunga Margin</th>
                <th scope="col">Pokok + Bunga</th>
                <th scope="col">Jml Angs</th>
                <th scope="col">Admin</th>
                <th scope="col">Harga Acuan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pinjams->where('anggota_id', $anggota) as $pinj)
                <tr>
                    {{-- <th>{{ $loop->iteration }}</th> --}}
                    <td>{{ $pinj->created_at->format('d M Y') }}</td>
                    <td>@currency($pinj->nilai_pinj)</td>
                    <td>@currency($pinj->pk_kem)</td>
                    <td>@currency($pinj->angsuran)</td>
                    <td>{{ $pinj->bunga }} %</td>
                    <td>@currency($pinj->bunga_margin)</td>
                    <td>@currency($pinj->pk_marg)</td>
                    <td>{{ $pinj->jumlah_angs }}</td>
                    <td>@currency($pinj->admin_total)</td>
                    <td>@currency($pinj->harga_acuan)</td>

                </tr>
            @endforeach
        </tbody>
    </table>
    {!! $pinjams->links() !!}
</div>
