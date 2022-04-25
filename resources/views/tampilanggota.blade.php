<h1>{{ $title }}</h1>
@foreach ($anggotas as $a)
    <article class="mb-5">
        <h2>
            <a href="/anggotas/{{ $a['id'] }}">{{ $a['nama'] }}</a>
        </h2>
        <p>{{ $a['nama_ibu'] }}</p>
        <p>{{ $a['tempat_lahir'] }}</p>
        <p>{{ $a['jenis_kelamin'] }}</p>
    </article>
@endforeach
