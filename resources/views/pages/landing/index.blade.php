@extends('layouts.front')

@section('title', 'Home')

@section('content')
    <!-- top -->
    <div>
        <!-- header -->

        <!-- hero -->
        <div class="hero">
            <div class="mx-auto flex pt-16 pb-16 lg:pb-20 lg:px-24 md:px-16 sm:px-8 px-8 lg:flex-row flex-col">
                <!-- Left Column -->
                <div
                    class="lg:flex-grow lg:w-1/2 flex flex-col lg:items-start lg:text-left mb-3 md:mb-12 lg:mb-0 items-center text-center">
                    <h1 class="text-black-1 lg:leading-normal sm:text-4xl lg:text-5xl text-3xl mb-5 font-semibold lg:mt-20">
                        PSB Come Join Us<br class="lg:block hidden">
                        2022-2023
                    </h1>
                    <p class="text-lg leading-relaxed text-serv-text font-light tracking-wide mb-10 lg:mb-18 ">
                        MTS SAINSTECH AL-QUR'AN Maribaya <br class="lg:block hidden">
                        Tahun Pelajaran 2022-2023 <br class="lg:block hidden">
                    </p>
                    <div
                        class="md:flex contents items-center mx-auto lg:mx-0 lg:flex justify-center lg:space-x-8 md:space-x-2 space-x-0">
                        <a href="{{ route('landing.daftar') }}"
                            class="bg-serv-button text-white text-lg font-semibold py-4 px-12 my-2 rounded-lg">
                            Daftar Disini
                        </a>
                    </div>
                </div>
                <!-- Right Column -->
                <div class="w-full lg:w-1/2 text-center lg:justify-start justify-center flex pr-0">
                    <img class="bottom-0 lg:block lg:right-24 md:right-16 sm:right-8 right-8 w-75"
                        src="{{ asset('/assets/header-image.png') }}" alt="" />
                </div>
            </div>
        </div>
    </div>


    <!-- content -->
    <div class="content">

        <!-- program unggulan -->
        <div class="mx-auto px-4 lg:pt-24 lg:pb-64 pb-10 bg-serv-services-bg">
            <div class="flex flex-wrap text-center justify-center">
                <div class="w-full lg:w-6/12 px-4 mt-10">
                    <h1 class="sm:text-2xl text-xl tracking-wider font-semibold mb-5 text-medium-black">Program Unggulan
                    </h1>
                    <p class="text-lg leading-relaxed mt-4 mb-4 text-gray-500">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, magni.
                    </p>
                </div>
            </div>
            <div class="flex flex-wrap mt-12 justify-center ">
                @forelse ($program_unggulan as $item_program_unggulan)
                    <div class="w-full lg:w-1/2 text-center justify-center flex lg:mb-0 mb-12 pt-5">
                        <div class="w-80 h-auto md:p-5 p-4 bg-white rounded-2xl inline-block">
                            <img src="{{ url(Storage::url($item_program_unggulan->logo)) }}" alt="" class="w-24 h-24 mx-auto" />
                            <!--Title-->
                            <p class="text-lg leading-relaxed text-gray-500 font-light tracking-wide text-center">
                                {{ $item_program_unggulan->judul ?? '' }}
                            </p>
                        </div>
                    </div>
                @empty
                    {{-- no data --}}
                @endforelse
            </div>
        </div>

        <!-- prestasi -->
        <div class="overflow-hidden">
            <div class="pt-10 pb-10 lg:pb-20 lg:pl-24 md:pl-16 sm:pl-8 pl-8 mx-auto">
                <div class="flex flex-wrap text-center justify-center">
                    <div class="w-full lg:w-6/12 px-4 mt-10">
                        <h1 class="sm:text-2xl text-xl tracking-wider font-semibold mb-5 text-medium-black">Prestasi
                        </h1>
                    </div>
                </div>
                <div class="flex overflow-x-scroll pb-10 hide-scroll-bar dragscroll -mx-3">
                    <div class="flex flex-nowrap">
                        @forelse ($prestasi as $item_prestasi)
                            <div class="px-3">
                                <div class="w-96 h-auto overflow-hidden md:p-5 p-4 bg-white rounded-2xl inline-block">
                                    <!--image-->
                                    <img class="rounded-2xl w-full" src="{{ url(Storage::url($item_prestasi->photo)) }}"
                                        alt="placeholder" />

                                    <!--deskripsi-->
                                    <p
                                        class="text-lg leading-relaxed text-gray-500 font-light tracking-wide text-center mt-4">
                                        {{ $item_prestasi->judul }}
                                    </p>
                                </div>
                            </div>
                        @empty
                            {{-- no data --}}
                        @endforelse
                    </div>
                </div>
            </div>
        </div>

        <!-- tenaga pendidik -->
        <div class="bg-serv-services-bg overflow-hidden">
            <div class="pt-10 pb-10 lg:pb-20 lg:pl-24 md:pl-16 sm:pl-8 pl-8 mx-auto">
                <div class="flex flex-wrap text-center justify-center">
                    <div class="w-full lg:w-6/12 px-4 mt-10">
                        <h1 class="sm:text-2xl text-xl tracking-wider font-semibold mb-5 text-medium-black">Tenaga Pendidik
                        </h1>
                    </div>
                </div>
                <div class="flex overflow-x-scroll pb-10 hide-scroll-bar dragscroll -mx-3">
                    <div class="flex flex-nowrap">
                        @forelse ($tenaga_pendidik as $item_pendidik)
                            <div class="px-3">
                                <div class="w-64 h-auto overflow-hidden md:p-5 p-4 rounded-2xl inline-block">
                                    <!--image-->
                                    <img class="rounded-2xl w-full"
                                        src="{{ url(Storage::url($item_pendidik->url_path)) }}" alt="placeholder" />

                                    <!--name-->
                                    <p
                                        class="text-lg leading-relaxed text-gray-500 font-light tracking-wide text-center mt-4">
                                        {{ $item_pendidik->name ?? '' }}
                                    </p>
                                </div>
                            </div>
                        @empty
                            {{-- no data --}}
                        @endforelse

                    </div>
                </div>
            </div>
        </div>

        <!-- video profil -->
        <div class="py-10 lg:py-24 flex lg:flex-row flex-col items-center cta-bg">
            <!-- Left Column -->
            <div class="w-full lg:w-1/2 text-center justify-center flex lg:mb-0 mb-12">
                @if (isset($identitas_web->path_video))
                    <a href="{{ url($identitas_web->path_video ?? '') }}" data-lity>
                        <img id="hero" src="{{ asset('/assets/images/video-placeholder.png') }}" alt=""
                            class="p-5" />
                    </a>
                @endif
            </div>
            <!-- Right Column -->
            <div class="lg:w-1/2 w-full flex flex-col lg:items-start items-center lg:text-left text-center">
                <h1 class="sm:text-2xl text-xl tracking-wider font-semibold mb-5 text-medium-black">Video Profil</h1>
                <p class="text-lg leading-relaxed text-serv-text font-light mb-10 lg:mb-18">
                    {{ $identitas_web->deskripsi_video ?? '' }}
                </p>
            </div>
        </div>
    </div>

@endsection
