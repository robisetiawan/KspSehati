<article>
    <h2>{{ $anggota['nama'] }}</h2>
    <h5>{{ $anggota['tempat_lahir'] }}</h5>
    <h5>{{ $anggota['jenis_kelamin'] }}</h5>
    {!! $anggota['nama_ibu'] !!} {{-- menjalankan script html jg --}}
</article>
<a href="/anggotas">kembali ke Semua Anggota</a>
