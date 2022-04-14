<!-- footer -->
<footer class="footer bg-serv-bg relative py-2">
    <div class="mx-auto lg:px-16 md:px-20 px-8 py-8 ">
        <div class="sm:flex sm:mt-16">
            <div class="mt-8 sm:mt-0 sm:w-full flex flex-col md:flex-row justify-between">
                <div class="flex-1 mt-2 flex-col">
                    <h2 class="font-medium text-white text-lg mb-4">Alamat</h2>
                    <div class="my-3">
                        <span class="text-serv-text font-light">
                            <i class="fa-solid fa-location-dot"></i> {{ $identitas_web->alamat ?? '' }}
                        </span>
                    </div>
                    <div class="my-3">
                        <span class="text-serv-text font-light">
                            <i class="fa-solid fa-phone"></i> {{ $identitas_web->no_telpon ?? '' }}
                        </span>
                    </div>
                    <div class="my-3">
                        <span class="text-serv-text font-light">
                            <i class="fa-solid fa-square-envelope"></i> {{ $identitas_web->email ?? '' }}
                        </span>
                    </div>
                </div>
                <div class="flex-1 mt-2 flex-col">
                    <h4 class="font-medium text-white text-lg mt-4 md:mt-0 mb-4">Social Media</h4>
                    <div class="my-3">
                        <a href="{{ $identitas_web->link_instagram ?? '#' }}" class="text-serv-text font-light">
                            <i class="fa-brands fa-instagram"></i> Instagram
                        </a>
                    </div>
                    <div class="my-3">
                        <a href="{{ $identitas_web->link_telegram ?? '#' }}" class="text-serv-text font-light">
                            <i class="fa-brands fa-telegram"></i> Telegram
                        </a>
                    </div>
                    <div class="my-3">
                        <a href="{{ $identitas_web->link_facebook ?? '#' }}" class="text-serv-text font-light">
                            <i class="fa-brands fa-facebook"></i> Facebook
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mx-auto lg:px-16 md:px-20 px-8 py-8 ">
        <div class="mt-16 border-t border-serv-border sm:flex justify-between w-100 ">
            <div class="flex items-left mt-8">
                <a href="{{ route('index') }}" class="flex text-3xl font-bold items-center">
                    <img src="{{ url(Storage::url($identitas_web->logo)) }}" alt=logo"
                        class="inline object-cover w-50 h-10 rounded" for="choose">
                </a>
            </div>
            <div class="sm:flex items-center justify-center mt-8 lg:ml-24">
                <p class="text-serv-text">
                    &copy; 2022 Serv All rights reserved.
                </p>
            </div>
        </div>
    </div>
</footer>
