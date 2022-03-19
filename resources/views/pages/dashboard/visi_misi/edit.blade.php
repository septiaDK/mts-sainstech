@extends('layouts.app')

@section('title', 'Tambah Visi Misi')

@section('content')
    <main class="h-full overflow-y-auto">
        <div class="container mx-auto">
            <div class="grid w-full gap-5 px-10 mx-auto md:grid-cols-12">
                <div class="col-span-12">
                    <h2 class="mt-8 mb-1 text-2xl font-semibold text-gray-700">
                        Edit Visi / Misi
                    </h2>
                </div>
            </div>
        </div>

        <!-- breadcrumb -->
        <nav class="mx-10 mt-8 text-sm" aria-label="Breadcrumb">
            <ol class="inline-flex p-0 list-none">
                <li class="flex items-center">
                    <a href="{{ route('admin.visi_misi.index') }}" class="text-gray-400">Visi Misi</a>
                    <svg class="w-3 h-3 mx-3 text-gray-400 fill-current" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 320 512">
                        <path
                            d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" />
                    </svg>
                </li>
                <li class="flex items-center">
                    <p class="font-medium">Edit Visi Misi</p>
                </li>
            </ol>
        </nav>

        <section class="container px-6 mx-auto mt-5">
            <div class="grid gap-5 md:grid-cols-12">
                <main class="col-span-12 p-4 md:pt-0">
                    <div class="px-2 py-2 mt-2 bg-white rounded-xl">

                        <form action="{{ route('admin.visi_misi.update', [$visi_misi->id]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method("PUT")

                            <div class="">
                                <div class="px-4 py-5 sm:p-6">
                                    <div class="grid grid-cols-6 gap-6">

                                        <div class="col-span-6">
                                            <label for="name"
                                                class="block mb-3 font-medium text-gray-700 text-md">Nama</label>

                                            <input placeholder="Visi / Misi?" type="text" name="name" id="name"
                                                autocomplete="name"
                                                class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"
                                                value="{{ $visi_misi->name ?? '' }}" required>

                                            @if ($errors->has('name'))
                                                <p class="text-red-500 mb-3 text-small">{{ $errors->first('name') }}</p>
                                            @endif
                                        </div>

                                        <div class="col-span-6">
                                            <label for="jenis"
                                                class="block mb-3 font-medium text-gray-700 text-md">Jenis</label>

                                            <div class="form-check">
                                                <input
                                                    class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                                    type="radio" name="jenis" id="visi" value="1" required @checked('1' == $visi_misi->jenis)>
                                                <label class="form-check-label inline-block text-gray-800"
                                                    for="visi">
                                                    Visi
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                                    type="radio" name="jenis" id="misi" value="0" required @checked('0' ==$visi_misi->jenis)>
                                                <label class="form-check-label inline-block text-gray-800"
                                                    for="misi">
                                                    Misi
                                                </label>
                                            </div>

                                            @if ($errors->has('jenis'))
                                                <p class="text-red-500 mb-3 text-small">{{ $errors->first('jenis') }}</p>
                                            @endif
                                        </div>


                                    </div>
                                </div>
                                <div class="px-4 py-3 text-right sm:px-6">

                                    <a href="{{ route('admin.visi_misi.index') }}"
                                        class="inline-flex justify-center px-4 py-2 mr-4 text-sm font-medium text-gray-700 bg-white border border-gray-600 rounded-lg shadow-sm hover:bg-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300"
                                        onclick="return confirm('Apakah Anda yakin kembali?, Data tidak akan tersimpan.')">
                                        Cancel
                                    </a>

                                    <button type="submit"
                                        class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-green-600 border border-transparent rounded-lg shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500"
                                        onclick="return confirm('Apakah anda yakin akan menyimpan data?')">
                                        Update
                                    </button>

                                </div>
                            </div>
                        </form>

                    </div>
                </main>
            </div>
        </section>
    </main>
@endsection
