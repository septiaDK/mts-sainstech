@extends('layouts.app')

@section('title', 'Peserta Didik Baru')

@section('content')
    <main class="h-full overflow-y-auto">
        <div class="container mx-auto">
            <div class="grid w-full gap-5 px-10 mx-auto md:grid-cols-12">
                <div class="col-span-8">
                    <h2 class="mt-8 mb-1 text-2xl font-semibold text-gray-700">
                        {{ $jmlh_siswa }} Peserta Didik Baru
                    </h2>
                </div>
                <div class="col-span-4 lg:text-right">
                    <div class="relative mt-0 md:mt-6">
                        <a href="{{ route('admin.siswa.create') }}"
                            class="inline-block px-4 py-2 mt-2 text-left text-white rounded-xl bg-serv-button">
                            + Tambah Peserta Didik Baru
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <section class="container px-6 mx-auto mt-5">


            <div class="grid gap-5 md:grid-cols-12">
                <main class="col-span-12 p-4 md:pt-0">

                    {{-- form search --}}
                    <form action="{{ route('admin.siswa.index') }}" method="GET">
                        <div class="flex">
                            <div class="border-b-gray-600 flex">
                                <input type="text" name="keyword" class="px-4 py-2 border-b-gray-600"
                                    placeholder="Pencarian..." value="{{ Request::get('keyword') }}">
                                <button class="flex items-center justify-center px-4 bg-serv-button text-white">
                                    <svg class="h-4 w-4 text-grey-dark" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </form>


                    <div class="px-6 py-2 mt-2 bg-white rounded-xl">
                        <table class="w-full" aria-label="Table">
                            <thead>
                                <tr class="text-sm font-normal text-left text-gray-900 border-b border-b-gray-600">
                                    <th class="py-4 text-center" scope="">No.</th>
                                    <th class="py-4 text-center" scope="">Nama</th>
                                    <th class="py-4 text-center" scope="">NISN</th>
                                    <th class="py-4 text-center" scope="">NIK</th>
                                    <th class="py-4 text-center" scope="">Alamat</th>
                                    <th class="py-4 text-center" scope="">No. Telpon</th>
                                    <th class="py-4 text-center" scope="">Action</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                @forelse ($siswa as $key => $item)
                                    <tr class="text-gray-700 border-b">
                                        <td class="px-1 py-5 text-sm text-center">
                                            {{ ++$key . '. ' }}
                                        </td>
                                        <td class="px-1 py-5 text-sm">
                                            {{ $item->name ?? '' }}
                                        </td>
                                        <td class="px-1 py-5 text-sm">
                                            {{ $item->nisn ?? '' }}
                                        </td>
                                        <td class="px-1 py-5 text-sm">
                                            {{ $item->nik ?? '' }}
                                        </td>
                                        <td class="px-1 py-5 text-sm">
                                            {{ $item->alamat ?? '' }}
                                        </td>
                                        <td class="px-1 py-5 text-sm text-center">
                                            {{ $item->no_telpon ?? '' }}
                                        </td>
                                        <td class="w-2/6 px-1 py-5 text-sm text-center">
                                            <a href="{{ route('admin.siswa.edit', $item->id) }}"
                                                class="px-4 py-2 mt-1 mr-2 text-center text-white rounded-xl bg-serv-button">Verifikasi</a>

                                            <a href="{{ route('admin.siswa.destroy', $item->id) }}"
                                                class="px-4 py-2 mt-2 text-center text-white rounded-xl bg-red-400"
                                                onclick="event.preventDefault(); document.getElementById('delete-form{{ $item->id }}').submit();">Delete</a>

                                            <form action="{{ route('admin.siswa.destroy', $item->id) }}"
                                                id="delete-form{{ $item->id }}" method="POST" style="display: none;">
                                                @csrf
                                                @method("DELETE")
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    {{-- emppty --}}
                                    <tr>
                                        <td colspan="7" class="text-center px-1 py-5 text-sm">NO DATA</td>
                                    </tr>
                                @endforelse
                                <tr>
                                    <td colspan="7" class="text-center px-1 py-5 text-sm"> {{ $siswa->links() }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </main>
            </div>
        </section>
    </main>
@endsection
