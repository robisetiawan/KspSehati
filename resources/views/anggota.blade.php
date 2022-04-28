<article>
    <h2>{{ $anggota->user->name }}</h2>
    <h5>{{ $anggota['tempat_lahir'] }}</h5>
    <h5>{{ $anggota['jenis_kelamin'] }}</h5>
    {!! $anggota['nama_ibu'] !!} {{-- menjalankan script html jg --}}
</article>
<a href="/dashboard/orders">kembali ke Semua Anggota</a>
