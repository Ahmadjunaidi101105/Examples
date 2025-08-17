<x-layout>
    <h1 class="text-xl mb-5 font-bold">Daftar Siswa</h1>

    <div class="overflow-x-auto">
        <table class="min-w-full divide-y-2 divide-gray-200 dark:divide-gray-700">
            <thead class="ltr:text-left rtl:text-right">
                <tr class="*:font-medium *:text-gray-900 *:first:sticky *:first:left-0 
                           *:first:bg-white dark:*:text-white dark:*:first:bg-gray-900">
                    <th class="px-3 py-2 whitespace-nowrap">Nama</th>
                    <th class="px-3 py-2 whitespace-nowrap">Tanggal Lahir</th>
                    <th class="px-3 py-2 whitespace-nowrap">Jurusan</th>
                    <th class="px-3 py-2 whitespace-nowrap">Nilai</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                @foreach ($data as $item)
                    <tr class="*:text-gray-900 *:first:sticky *:first:left-0 
                               *:first:bg-white *:first:font-medium 
                               dark:*:text-white dark:*:first:bg-gray-900">
                        <td class="px-3 py-2 whitespace-nowrap">{{ $item['nama'] }}</td>
                        <td class="px-3 py-2 whitespace-nowrap">04/06/1262</td>
                        <td class="px-3 py-2 whitespace-nowrap">Vampire Warrior</td>
                        <td class="px-3 py-2 whitespace-nowrap">{{ $item['nilai'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <x-slot:footer>
        <strong>Siswa Page</strong>
    </x-slot:footer>
</x-layout>
