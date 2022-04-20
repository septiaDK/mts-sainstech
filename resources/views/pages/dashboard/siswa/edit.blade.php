@extends('layouts.app')

@section('title', 'Verifikasi Calon Siswa')

@section('content')
    <main class="h-full overflow-y-auto">
        <div class="container mx-auto">
            <div class="grid w-full gap-5 px-10 mx-auto md:grid-cols-12">
                <div class="col-span-12">
                    <h2 class="mt-8 mb-1 text-2xl font-semibold text-gray-700">
                        Verifikasi Calon Siswa
                    </h2>
                </div>
            </div>
        </div>

        <!-- breadcrumb -->
        <nav class="mx-10 mt-8 text-sm" aria-label="Breadcrumb">
            <ol class="inline-flex p-0 list-none">
                <li class="flex items-center">
                    <a href="{{ route('admin.siswa.index') }}" class="text-gray-400">Calon Siswa</a>
                    <svg class="w-3 h-3 mx-3 text-gray-400 fill-current" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 320 512">
                        <path
                            d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" />
                    </svg>
                </li>
                <li class="flex items-center">
                    <p class="font-medium">Verifikasi Calon Siswa</p>
                </li>
            </ol>
        </nav>

        <section class="container px-6 mx-auto mt-5">
            <div class="grid gap-5 md:grid-cols-12">
                <main class="col-span-12 p-4 md:pt-0">
                    <div class="px-2 py-2 mt-2 bg-white rounded-xl">

                        <form action="{{ route('admin.siswa.update', $siswa->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @method("PUT")
                            @csrf

                            <div class="">
                                <div class="px-4 py-5 sm:p-6">
                                    <div class="grid grid-cols-6 gap-6">

                                        <div class="col-span-6">
                                            <label for="name" class="block mb-3 font-medium text-gray-700 text-md">Nama
                                            </label>

                                            <input placeholder="Nama Calon Peserta Didik Baru?" type="text" name="name"
                                                id="name" autocomplete="name"
                                                class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"
                                                value="{{ $siswa->name ?? '' }}" required>
                                        </div>

                                        <div class="col-span-6">
                                            <label for="nisn" class="block mb-3 font-medium text-gray-700 text-md">NISN
                                            </label>

                                            <input placeholder="NISN Sesuai Ijazah?" type="text" name="nisn" id="nisn"
                                                autocomplete="nisn"
                                                class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"
                                                value="{{ $siswa->nisn ?? '' }}">
                                        </div>

                                        <div class="col-span-6">
                                            <label for="nik" class="block mb-3 font-medium text-gray-700 text-md">Nomor
                                                Induk
                                                Kependudukan (NIK)</label>

                                            <input placeholder="NIK Calon Peserta Didik Baru?" type="text" name="nik"
                                                id="nik" autocomplete="nik"
                                                class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"
                                                value="{{ $siswa->nik ?? '' }}">
                                        </div>

                                        <div class="col-span-6">
                                            <label for="tempat_lahir"
                                                class="block mb-3 font-medium text-gray-700 text-md">Tempat
                                                Lahir</label>

                                            <input placeholder="Tempat Lahir Calon Peserta Didik Baru?" type="text"
                                                name="tempat_lahir" id="tempat_lahir" autocomplete="tempat_lahir"
                                                class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"
                                                value="{{ $siswa->tempat_lahir ?? '' }}" required>
                                        </div>

                                        <div class="col-span-6">
                                            <label for="tanggal_lahir"
                                                class="block mb-3 font-medium text-gray-700 text-md">Tanggal
                                                Lahir</label>

                                            <input placeholder="Tanggal Lahir Calon Peserta Didik Baru?" type="date"
                                                name="tanggal_lahir" id="tanggal_lahir" autocomplete="tanggal_lahir"
                                                class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"
                                                value="{{ $siswa->tanggal_lahir }}" required>
                                        </div>

                                        <div class="col-span-6">
                                            <label for="jenis_kelamin"
                                                class="block mb-3 font-medium text-gray-700 text-md">Jenis
                                                Kelamin</label>

                                            <div class="form-check">
                                                <input
                                                    class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                                    type="radio" name="jenis_kelamin" id="L" value="L" required
                                                    @checked($siswa->jenis_kelamin == 'L')>
                                                <label class="form-check-label inline-block text-gray-800" for="L">
                                                    Laki - Laki
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                                    type="radio" name="jenis_kelamin" id="P" value="P" required
                                                    @checked($siswa->jenis_kelamin == 'P')>
                                                <label class="form-check-label inline-block text-gray-800" for="P">
                                                    Perempuan
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-span-6">
                                            <label for="alamat_lengkap"
                                                class="block mb-3 font-medium text-gray-700 text-md">Alamat
                                                Lengkap</label>
                                            <textarea placeholder="Alamat Lengkap Calon Peserta Didik Baru?" type="text" name="alamat_lengkap" id="alamat_lengkap"
                                                autocomplete="alamat_lengkap"
                                                class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"
                                                rows="4" required>{{ $siswa->alamat ?? '' }}</textarea>
                                        </div>

                                        <div class="col-span-6">
                                            <label for="asal_sekolah"
                                                class="block mb-3 font-medium text-gray-700 text-md">Asal Sekolah</label>

                                            <input placeholder="Asal Sekolah Sebelumnya?" type="text" name="asal_sekolah"
                                                id="asal_sekolah" autocomplete="asal_sekolah"
                                                class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"
                                                value="{{ $siswa->asal_sekolah ?? '' }}">
                                        </div>

                                        <div class="col-span-6">
                                            <label for="no_telpon" class="block mb-3 font-medium text-gray-700 text-md">No
                                                Telphone / Whatsapp</label>

                                            <input placeholder="No Telphone / Whatsapp Yang Bisa Dihubungi?" type="text"
                                                name="no_telpon" id="no_telpon" autocomplete="no_telpon"
                                                class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"
                                                value="{{ $siswa->no_telpon ?? '' }}" required>
                                        </div>

                                        <div class="col-span-6">
                                            <label for="nama_ayah" class="block mb-3 font-medium text-gray-700 text-md">Nama
                                                Ayah</label>

                                            <input placeholder="Nama Ayah?" type="text" name="nama_ayah" id="nama_ayah"
                                                autocomplete="nama_ayah"
                                                class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"
                                                value="{{ $siswa->nama_ayah ?? '' }}">
                                        </div>

                                        <div class="col-span-6">
                                            <label for="pekerjaan_ayah"
                                                class="block mb-3 font-medium text-gray-700 text-md">Pekerjaan Ayah</label>

                                            <input placeholder="Pekerjaan Ayah?" type="text" name="pekerjaan_ayah"
                                                id="pekerjaan_ayah" autocomplete="pekerjaan_ayah"
                                                class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"
                                                value="{{ $siswa->pekerjaan_ayah ?? '' }}">
                                        </div>

                                        <div class="col-span-6">
                                            <label for="pendidikan_terakhir_ayah"
                                                class="block mb-3 font-medium text-gray-700 text-md">Pendidikan Terakhir
                                                Ayah</label>

                                            <input placeholder="Pendidikan Terakhir Ayah?" type="text"
                                                name="pendidikan_terakhir_ayah" id="pendidikan_terakhir_ayah"
                                                autocomplete="pendidikan_terakhir_ayah"
                                                class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"
                                                value="{{ $siswa->pendidikan_terakhir_ayah ?? '' }}">
                                        </div>

                                        <div class="col-span-6">
                                            <label for="nama_ibu" class="block mb-3 font-medium text-gray-700 text-md">Nama
                                                Ibu</label>

                                            <input placeholder="Nama Ibu?" type="text" name="nama_ibu" id="nama_ibu"
                                                autocomplete="nama_ibu"
                                                class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"
                                                value="{{ $siswa->nama_ibu ?? '' }}">
                                        </div>

                                        <div class="col-span-6">
                                            <label for="pekerjaan_ibu"
                                                class="block mb-3 font-medium text-gray-700 text-md">Pekerjaan Ibu</label>

                                            <input placeholder="Pekerjaan Ibu?" type="text" name="pekerjaan_ibu"
                                                id="pekerjaan_ibu" autocomplete="pekerjaan_ibu"
                                                class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"
                                                value="{{ $siswa->pekerjaan_ibu ?? '' }}">
                                        </div>

                                        <div class="col-span-6">
                                            <label for="pendidikan_terakhir_ibu"
                                                class="block mb-3 font-medium text-gray-700 text-md">Pendidikan Terakhir
                                                Ibu</label>

                                            <input placeholder="Pendidikan Terakhir Ibu?" type="text"
                                                name="pendidikan_terakhir_ibu" id="pendidikan_terakhir_ibu"
                                                autocomplete="pendidikan_terakhir_ibu"
                                                class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"
                                                value="{{ $siswa->pendidikan_terakhir_ibu ?? '' }}">
                                        </div>

                                        <div class="col-span-6">
                                            <label for="penghasilan_ortu"
                                                class="block mb-3 font-medium text-gray-700 text-md">Rata - Rata Penghasilan
                                                Orang Tua</label>

                                            <div class="form-check">
                                                <input
                                                    class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                                    type="radio" name="penghasilan_ortu" id="penghasilan_1"
                                                    value="0 Sampai 500.000" @checked($siswa->penghasilan_ortu == '0 Sampai 500.000')>
                                                <label class="form-check-label inline-block text-gray-800"
                                                    for="penghasilan_1">
                                                    0 Sampai 500.000
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                                    type="radio" name="penghasilan_ortu" id="penghasilan_2"
                                                    value="500.000 Sampai 1.000.000" @checked($siswa->penghasilan_ortu == '500.000 Sampai 1.000.000')>
                                                <label class="form-check-label inline-block text-gray-800"
                                                    for="penghasilan_2">
                                                    500.000 Sampai 1.000.000
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                                    type="radio" name="penghasilan_ortu" id="penghasilan_3"
                                                    value="1.000.000 Sampai 2.000.000" @checked($siswa->penghasilan_ortu == '1.000.000 Sampai 2.000.000')>
                                                <label class="form-check-label inline-block text-gray-800"
                                                    for="penghasilan_3">
                                                    1.000.000 Sampai 2.000.000
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                                    type="radio" name="penghasilan_ortu" id="penghasilan_4"
                                                    value="Di Atas 2.000.000" @checked($siswa->penghasilan_ortu == 'Di Atas 2.000.000')>
                                                <label class="form-check-label inline-block text-gray-800"
                                                    for="penghasilan_4">
                                                    Di Atas 2.000.000
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-span-6">
                                            <label for="status_ortu"
                                                class="block mb-3 font-medium text-gray-700 text-md">Status Orang Tua Calon
                                                Peserta Didik Baru</label>

                                            <input placeholder="Status Orang Tua Calon Peserta Didik Baru?" type="text"
                                                name="status_ortu" id="status_ortu" autocomplete="status_ortu"
                                                class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"
                                                value="">
                                        </div>

                                        <div class="col-span-6">
                                            <label for="nama_wali" class="block mb-3 font-medium text-gray-700 text-md">Nama
                                                Wali</label>
                                            <p class="text-red-500">* (Bisa Di Isi Jika (Calon Peserta Didik Baru) Ikut
                                                Dengan Wali/ Saudara)</p>

                                            <input placeholder="" type="text" name="nama_wali" id="nama_wali"
                                                autocomplete="nama_wali"
                                                class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"
                                                value="">
                                        </div>

                                        <div class="col-span-6">
                                            <label for="pekerjaan_wali"
                                                class="block mb-3 font-medium text-gray-700 text-md">Pekerjaan Wali</label>
                                            <p class="text-red-500">* (Bisa Di Isi Jika (Calon Peserta Didik Baru) Ikut
                                                Dengan Wali/ Saudara)</p>

                                            <input placeholder="" type="text" name="pekerjaan_wali" id="pekerjaan_wali"
                                                autocomplete="pekerjaan_wali"
                                                class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"
                                                value="">
                                        </div>

                                        <div class="col-span-6">
                                            <label for="hubungan_wali"
                                                class="block mb-3 font-medium text-gray-700 text-md">Hubungan Wali Dengan
                                                Calon Peserta Didik Baru</label>
                                            <p class="text-red-500">* (Bisa Di Isi Jika (Calon Peserta Didik Baru) Ikut
                                                Dengan Wali/ Saudara)</p>

                                            <input placeholder="" type="text" name="hubungan_wali" id="hubungan_wali"
                                                autocomplete="hubungan_wali"
                                                class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"
                                                value="">
                                        </div>

                                        <div class="col-span-6">
                                            <label for="photo" class="block mb-3 font-medium text-gray-700 text-md">Upload
                                                Foto Calon Peserta Didik</label>

                                            <img src="{{ url(Storage::url($siswa->photo)) }}" alt="foto"
                                                class="inline object-cover w-16 h-36 rounded" for="choose">


                                            <input type="file" name="photo" id="photo" autocomplete="photo"
                                                class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"
                                                value="">
                                        </div>

                                    </div>
                                </div>
                                <div class="px-4 py-3 text-right sm:px-6">

                                    <a href="{{ route('admin.siswa.index') }}"
                                        class="inline-flex justify-center px-4 py-2 mr-4 text-sm font-medium text-gray-700 bg-white border border-gray-600 rounded-lg shadow-sm hover:bg-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300"
                                        onclick="return confirm('Apakah Anda yakin kembali?, Data tidak akan tersimpan.')">
                                        Cancel
                                    </a>

                                    <button type="submit"
                                        class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-green-600 border border-transparent rounded-lg shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500"
                                        onclick="return confirm('Apakah anda yakin akan menyimpan data?')">
                                        {{ $nama_button }}
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
