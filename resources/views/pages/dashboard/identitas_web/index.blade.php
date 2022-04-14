@extends('layouts.app')

@section('title', 'Identitas Web')

@section('content')
    <main class="h-full overflow-y-auto">

        <div class="container mx-auto">
            <div class="grid w-full gap-5 px-10 mx-auto md:grid-cols-12">
                <div class="col-span-12">
                    <h2 class="mt-8 mb-1 text-2xl font-semibold text-gray-700">
                        Identitas Web
                    </h2>
                </div>
            </div>
        </div>

        <section class="container px-6 mx-auto mt-5">
            <div class="grid gap-5 md:grid-cols-12">
                <main class="col-span-12 p-4 md:pt-0">
                    <div class="px-2 py-2 mt-2 bg-white rounded-xl">
                        <form action="{{ $action }}" method="POST" enctype="multipart/form-data">

                            @if ($jenis == 'Update')
                                @method('PUT')
                            @endif
                            @csrf

                            <div class="">
                                <div class="px-4 py-5 sm:p-6">
                                    <div class="grid grid-cols-6 gap-6">

                                        <div class="md:col-span-6 lg:col-span-3">
                                            <label for="no_telpon" class="block mb-3 font-medium text-gray-700 text-md">No.
                                                Telpon</label>
                                            <input placeholder="" type="text" name="no_telpon" id="no_telpon"
                                                autocomplete="role"
                                                class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"
                                                value="{{ $identitas_web->no_telpon ?? '' }}" required>

                                            @if ($errors->has('no_telpon'))
                                                <p class="text-red-500 mb-3 text-small">{{ $errors->first('no_telpon') }}
                                                </p>
                                            @endif
                                        </div>

                                        <div class="md:col-span-6 lg:col-span-3">
                                            <label for="email" class="block mb-3 font-medium text-gray-700 text-md">Email
                                                Address</label>
                                            <input placeholder="" type="text" name="email" id="email" autocomplete="email"
                                                class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"
                                                value="{{ $identitas_web->email ?? '' }}" required>

                                            @if ($errors->has('email'))
                                                <p class="text-red-500 mb-3 text-small">{{ $errors->first('email') }}</p>
                                            @endif
                                        </div>

                                        <div class="col-span-6">
                                            <label for="alamat"
                                                class="block mb-3 font-medium text-gray-700 text-md">Alamat</label>
                                            <textarea placeholder="" type="text" name="alamat" id="alamat" autocomplete="alamat"
                                                class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"
                                                rows="4">{{ $identitas_web->alamat ?? '' }}</textarea>

                                            @if ($errors->has('alamat'))
                                                <p class="text-red-500 mb-3 text-small">
                                                    {{ $errors->first('alamat') }}</p>
                                            @endif
                                        </div>

                                        <div class="col-span-6">
                                            <label for="link_instagram" class="block mb-3 font-medium text-gray-700 text-md">URL Instagram</label>
                                            <input placeholder="" type="text" name="link_instagram" id="link_instagram"
                                                autocomplete="link_instagram"
                                                class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"
                                                value="{{ $identitas_web->link_instagram ?? '' }}">

                                            @if ($errors->has('link_instagram'))
                                                <p class="text-red-500 mb-3 text-small">{{ $errors->first('link_instagram') }}
                                                </p>
                                            @endif
                                        </div>

                                        <div class="col-span-6">
                                            <label for="link_telegram" class="block mb-3 font-medium text-gray-700 text-md">URL Telegram</label>
                                            <input placeholder="" type="text" name="link_telegram" id="link_telegram"
                                                autocomplete="link_telegram"
                                                class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"
                                                value="{{ $identitas_web->link_telegram ?? '' }}">

                                            @if ($errors->has('link_telegram'))
                                                <p class="text-red-500 mb-3 text-small">{{ $errors->first('link_telegram') }}
                                                </p>
                                            @endif
                                        </div>

                                        <div class="col-span-6">
                                            <label for="link_facebook" class="block mb-3 font-medium text-gray-700 text-md">URL Facebook</label>
                                            <input placeholder="" type="text" name="link_facebook" id="link_facebook"
                                                autocomplete="link_facebook"
                                                class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"
                                                value="{{ $identitas_web->link_facebook ?? '' }}">

                                            @if ($errors->has('link_facebook'))
                                                <p class="text-red-500 mb-3 text-small">{{ $errors->first('link_facebook') }}
                                                </p>
                                            @endif
                                        </div>

                                        <div class="col-span-6">
                                            <label for="path_video" class="block mb-3 font-medium text-gray-700 text-md">URL
                                                Video Profil (Embed Youtube)</label>
                                            <input placeholder="" type="text" name="path_video" id="path_video"
                                                autocomplete="path_video"
                                                class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"
                                                value="{{ $identitas_web->path_video ?? '' }}" required>

                                            @if ($errors->has('path_video'))
                                                <p class="text-red-500 mb-3 text-small">{{ $errors->first('path_video') }}
                                                </p>
                                            @endif
                                        </div>

                                        <div class="col-span-6">
                                            <label for="deskripsi_video"
                                                class="block mb-3 font-medium text-gray-700 text-md">Deskripsi Video
                                                Profil</label>
                                            <textarea placeholder="" type="text" name="deskripsi_video" id="deskripsi_video" autocomplete="deskripsi_video"
                                                class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"
                                                rows="4">{{ $identitas_web->deskripsi_video ?? '' }}</textarea>

                                            @if ($errors->has('deskripsi_video'))
                                                <p class="text-red-500 mb-3 text-small">
                                                    {{ $errors->first('deskripsi_video') }}</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="px-4 py-3 text-right sm:px-6">
                                    <button type="submit"
                                        class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-green-600 border border-transparent rounded-lg shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500"
                                        onclick="return confirm('Apakah anda yakin akan menyimpan data?')">
                                        Simpan
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
