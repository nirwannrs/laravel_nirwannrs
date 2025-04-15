<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Pasien') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="mb-4">
                        <button class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                            Create
                        </button>
                    </div>
                    <div class="mb-4">
                        <input type="text" placeholder="Search..." class="border rounded py-2 px-4 w-full">
                    </div>
                    <table class="table-auto w-full text-left border-collapse">
                        <thead>
                            <tr>
                                <th class="border px-4 py-2">#</th>
                                <th class="border px-4 py-2">Nama Pasien</th>
                                <th class="border px-4 py-2">Alamat</th>
                                <th class="border px-4 py-2">No. Telepon</th>
                                <th class="border px-4 py-2">Rumah Sakit</th>
                                <th class="border px-4 py-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pasiens as $pasien)
                                <tr>
                                    <td class="border px-4 py-2">{{ $loop->iteration }}</td>
                                    <td class="border px-4 py-2">{{ $pasien->nama_pasien }}</td>
                                    <td class="border px-4 py-2">{{ $pasien->alamat }}</td>
                                    <td class="border px-4 py-2">{{ $pasien->no_telpon }}</td>
                                    <td class="border px-4 py-2">{{ $pasien->rumahSakit->nama_rs ?? '-' }}</td>
                                    <td class="border px-4 py-2">
                                        <button
                                            class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">
                                            Edit
                                        </button>
                                        <form action="#" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="bg-red-600 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>