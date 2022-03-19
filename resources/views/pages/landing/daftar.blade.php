@extends('layouts.front')

@section('title', 'Formulir Daftar')

@section('content')
    <div class="content">
        <div class="mx-auto flex pt-16 pb-16 lg:pb-20 lg:px-24 md:px-16 sm:px-8 px-8 lg:flex-row flex-col">
            <div class="flex flex-col w-full">
                <div class="text-center">
                    <h1 class="text-3xl font-semibold mb-1">Formulir Pendaftaran Peserta Didik Baru</h1>
                    <p class="leading-8 text-serv-text mb-10">
                        MTS Sainstech Al-Qur'an Maribaya
                    </p>
                </div>

                <section class="container px-6 mx-auto mt-5">
                    <div class="grid gap-5 md:grid-cols-12">
                        <main class="col-span-12 p-4 md:pt-0">
                            <div class="px-2 py-2 mt-2 bg-white rounded-xl">

                                <form action="{{ route('landing.store_daftar') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <div class="">
                                        <div class="px-4 py-5 sm:p-6">
                                            <div class="grid grid-cols-6 gap-6">

                                                <div class="col-span-6">
                                                    <label for="title"
                                                        class="block mb-3 font-medium text-gray-700 text-md">Nama </label>

                                                    <input placeholder="Nama Calon Peserta Didik Baru?" type="text"
                                                        name="title" id="title" autocomplete="title"
                                                        class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"
                                                        value="" required>
                                                </div>

                                                <div class="col-span-6">
                                                    <label for="title"
                                                        class="block mb-3 font-medium text-gray-700 text-md">NISN </label>

                                                    <input placeholder="NISN Sesuai Ijazah?" type="text" name="title"
                                                        id="title" autocomplete="title"
                                                        class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"
                                                        value="" required>
                                                </div>

                                                <div class="col-span-6">
                                                    <label for="title"
                                                        class="block mb-3 font-medium text-gray-700 text-md">Nomor Induk
                                                        Kependudukan (NIK)</label>

                                                    <input placeholder="NIK Calon Peserta Didik Baru?" type="text"
                                                        name="title" id="title" autocomplete="title"
                                                        class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"
                                                        value="" required>
                                                </div>

                                                <div class="col-span-6">
                                                    <label for="title"
                                                        class="block mb-3 font-medium text-gray-700 text-md">Tempat
                                                        Lahir</label>

                                                    <input placeholder="Tempat Lahir Calon Peserta Didik Baru?" type="text"
                                                        name="title" id="title" autocomplete="title"
                                                        class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"
                                                        value="" required>
                                                </div>

                                                <div class="col-span-6">
                                                    <label for="title"
                                                        class="block mb-3 font-medium text-gray-700 text-md">Tanggal
                                                        Lahir</label>

                                                    <input placeholder="Tanggal Lahir Calon Peserta Didik Baru?" type="date"
                                                        name="title" id="title" autocomplete="title"
                                                        class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"
                                                        value="" required>
                                                </div>

                                                <div class="col-span-6">
                                                    <label for="title"
                                                        class="block mb-3 font-medium text-gray-700 text-md">Jenis
                                                        Kelamin</label>

                                                    <div class="form-check">
                                                        <input
                                                            class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                                            type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                        <label class="form-check-label inline-block text-gray-800"
                                                            for="flexRadioDefault1">
                                                            Laki - Laki
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input
                                                            class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                                            type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                                        <label class="form-check-label inline-block text-gray-800"
                                                            for="flexRadioDefault2">
                                                            Perempuan
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="col-span-6">
                                                    <label for="note"
                                                        class="block mb-3 font-medium text-gray-700 text-md">Alamat
                                                        Lengkap</label>
                                                    <textarea placeholder="Alamat Lengkap Calon Peserta Didik Baru?" type="text" name="note" id="note" autocomplete="note"
                                                        class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"
                                                        rows="4" required></textarea>
                                                </div>

                                                <div class="col-span-6">
                                                    <label for="title"
                                                        class="block mb-3 font-medium text-gray-700 text-md">No Telphone / Whatsapp</label>

                                                    <input placeholder="No Telphone / Whatsapp Yang Bisa Dihubungi?" type="text"
                                                        name="title" id="title" autocomplete="title"
                                                        class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"
                                                        value="" required>
                                                </div>

                                                <div class="col-span-6">
                                                    <label for="title"
                                                        class="block mb-3 font-medium text-gray-700 text-md">Upload Foto Calon Peserta Didik</label>

                                                    <input type="file"
                                                        name="title" id="title" autocomplete="title"
                                                        class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"
                                                        value="" required>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="px-4 py-3 text-right sm:px-6">
                                            <button type="submit"
                                                class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-green-600 border border-transparent rounded-lg shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500"
                                                onclick="return confirm('Are you sure want to submit this data?')">
                                                Simpan
                                            </button>

                                        </div>
                                    </div>
                                </form>

                            </div>
                        </main>
                    </div>
                </section>
            </div>

        </div>
    </div>
@endsection
