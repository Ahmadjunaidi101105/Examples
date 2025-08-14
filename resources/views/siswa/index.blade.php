<x-layout>
    <h1> Daftar Siswa </h1>
    <ul>
        @foreach ($data as $item )
            <li>{{ $item['nama'] }} - {{ $item ['nilai'] }}</li>
        @endforeach
    </ul>
    <x-slot:footer>
        <Strong>Siswa Page</Strong>
    </x-slot:footer>
</x-layout>
