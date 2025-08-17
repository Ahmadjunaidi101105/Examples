<x-layout>
    <div class="flow-root">
        <dl
            class="-my-3 divide-y divide-gray-200 rounded border border-gray-200 text-sm *:even:bg-gray-50 
                   dark:divide-gray-700 dark:border-gray-800 dark:*:even:bg-gray-800" >
            <!-- Name -->
            <div class="grid grid-cols-1 gap-1 p-3 sm:grid-cols-3 sm:gap-4">
                <dt class="font-medium text-gray-900 dark:text-white">Name</dt>
                <dd class="text-gray-700 sm:col-span-2 dark:text-gray-200">{{$siswa ['nama'] }} </dd>
            </div>

            <!-- Occupation -->
            <div class="grid grid-cols-1 gap-1 p-3 sm:grid-cols-3 sm:gap-4">
                <dt class="font-medium text-gray-900 dark:text-white">Tanggal Lahir</dt>
                <dd class="text-gray-700 sm:col-span-2 dark:text-gray-200">{{$siswa ['tanggal_lahir'] }} </dd>
            </div>

            <!-- Salary -->
            <div class="grid grid-cols-1 gap-1 p-3 sm:grid-cols-3 sm:gap-4">
                <dt class="font-medium text-gray-900 dark:text-white">Jurusan</dt>
                <dd class="text-gray-700 sm:col-span-2 dark:text-gray-200">{{$siswa ['jurusan'] }} </dd>
            </div>

            <!-- Bio -->
            <div class="grid grid-cols-1 gap-1 p-3 sm:grid-cols-3 sm:gap-4">
                <dt class="font-medium text-gray-900 dark:text-white">Nilai</dt>
                <dd class="text-gray-700 sm:col-span-2 dark:text-gray-200">{{$siswa ['nilai'] }} 
                </dd>
            </div>
        </dl>
    </div>

    <x-slot:footer>
        <strong>Siswa Detail Page</strong>
    </x-slot:footer>
</x-layout>
