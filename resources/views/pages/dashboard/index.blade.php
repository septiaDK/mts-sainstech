@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <main class="h-full overflow-y-auto">
        <div class="container mx-auto">
            <div class="grid w-full gap-5 px-10 mx-auto md:grid-cols-12">
                <div class="col-span-8">
                    <h2 class="mt-8 mb-1 text-2xl font-semibold text-gray-700">
                        Dashboard
                    </h2>
                </div>
                <div class="col-span-4 text-right">
                    <div @click.away="open = false" class="relative z-10 hidden mt-5 lg:block" x-data="{ open: false }">
                        <button
                            class="flex flex-row items-center w-full px-4 py-2 mt-2 text-left bg-white rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4">

                            Halo, Administrator
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <section class="container px-6 mx-auto mt-5">
            <div class="grid gap-5 md:grid-cols-12">
                <main class="p-4 lg:col-span-12 md:col-span-12 md:pt-0">
                    <div class="sm:grid sm:h-32 sm:grid-flow-row sm:gap-4 sm:grid-cols-3">
                        <div class="flex flex-col justify-center px-4 py-4 mb-4 bg-white rounded-xl">
                            <div>
                                <div>
                                    <img src="{{ asset('/assets/images/new-freelancer-icon.svg') }}" alt=""
                                        class="w-8 h-8">
                                </div>
                                <p class="mt-2 text-2xl font-semibold text-left text-gray-800">Siswa</p>
                                <p class="text-sm text-left text-gray-500">
                                    Jumlah <br class="hidden lg:block">
                                    {{ $jmlh_siswa ?? '' }}
                                </p>
                            </div>
                        </div>
                        <div class="flex flex-col justify-center px-4 py-4 mb-4 bg-white rounded-xl">
                            <div>
                                <div>
                                    <img src="{{ asset('/assets/images/new-freelancer-icon.svg') }}" alt=""
                                        class="w-8 h-8">
                                </div>
                                <p class="mt-2 text-2xl font-semibold text-left text-gray-800">Tenaga Pendidik</p>
                                <p class="text-sm text-left text-gray-500">
                                    Jumlah <br class="hidden lg:block">
                                   {{ $jmlh_tenaga_pendidik ?? '' }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="p-6 mt-8 bg-white rounded-xl">
                        <div>
                            <h2 class="mb-1 text-xl text-gray-500">
                                Calon Peserta Didik Baru Hari Ini
                            </h2>
                        </div>
                        <table class="w-full mt-4" aria-label="Table">
                            <thead>
                                <tr class="text-sm font-normal text-left text-gray-900 border-b border-b-gray-600">
                                    <th class="py-4" scope="">No.</th>
                                    <th class="py-4" scope="">Nama</th>
                                    <th class="py-4" scope="">Jenis Kelamin</th>
                                    <th class="py-4" scope="">Alamat</th>
                                    <th class="py-4" scope="">No. Telfon</th>
                                    <th class="py-4" scope="">Status Verifikasi</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                @forelse ($calon_siswa_today as $key => $item)
                                    <tr class="text-gray-700">
                                        <td class="px-1 py-5">
                                            {{ ++$key }}
                                        </td>
                                        <td class="px-1 py-5">
                                            {{ $item->name ?? '' }}
                                        </td>
                                        <td class="px-1 py-5">
                                            {{ $item->jenis_kelamin ?? '' }}
                                        </td>
                                        <td class="px-1 py-5">
                                            {{ $item->alamat ?? '' }}
                                        </td>
                                        <td class="px-1 py-5">
                                            {{ $item->no_telpon ?? '' }}
                                        </td>
                                        <td class="px-1 py-5">
                                            @if ($item->status_verifikasi == 'PENDING')
                                                <p class="text-red-500">{{ $item->status_verifikasi }}</p>
                                                @else
                                                <p class="text-green-500">{{ $item->status_verifikasi }}</p>
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    {{-- empty --}}
                                @endforelse

                            </tbody>
                        </table>
                    </div>
                </main>
            </div>
        </section>
    </main>
@endsection
