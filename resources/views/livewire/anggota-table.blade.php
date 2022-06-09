<div>
    <div class="row mb-3">
        <div class="col-sm-4">
            <input wire:model.debounce.300ms="search" type="text" class="form-select" placeholder="ex : 2022-06-08">
        </div>
        <div class="col-sm-3">
            <select wire:model="orderBy" class="form-select" id="grid-state">
                <option value="no_anggota">No Anggota</option>
                <option value="name">Nama</option>
                <option value="tempat_lahir">Tempat Lahir</option>
                <option value="tanggal_lahir">Tanggal Lahir</option>
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
    <table class="table table-bordered table-xxs text-center table-striped">
        <thead>
            <tr>
                {{-- <th scope="col">No</th> --}}
                <th scope="col">No Anggota</th>
                <th scope="col">Nama</th>
                <th scope="col">TTL</th>
                <th scope="col">Telepon</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($anggotas as $a)
                <tr>
                    {{-- <th>{{ $loop->iteration }}</th> --}}
                    <td>{{ $a->no_anggota }}</td>
                    <td>{{ $a->user->name }}</td>
                    <td>{{ $a->tempat_lahir }}, {{ $a->tanggal_lahir }}</td>
                    <td>{{ $a->telepon_seluler }}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <a href="/dashboard/anggotas/{{ $a->id }}">
                                <button class="badge bg-success border-0"><i class="fa fa-eye fa-lg"
                                        aria-hidden="true"></i></button>
                            </a>

                            <a href="/dashboard/anggotas/{{ $a->id }}/edit">
                                <button class="badge bg-primary border-0"><i class="fa fa-pencil fa-lg"
                                        aria-hidden="true"></i></button>
                            </a>

                            <form action="/dashboard/anggotas/{{ $a->id }}" method="POST">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure !!')"><i
                                        class="fa fa-times fa-lg" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
    {!! $anggotas->links() !!}
</div>
