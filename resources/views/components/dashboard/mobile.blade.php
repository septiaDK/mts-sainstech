<aside class="fixed inset-y-0 z-20 flex-shrink-0 w-64 overflow-y-auto bg-white md:hidden" x-show="isSideMenuOpen"
    x-transition:enter="transition ease-in-out duration-150"
    x-transition:enter-start="opacity-0 transform -translate-x-20" x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0 transform -translate-x-20" @click.away="closeSideMenu"
    @keydown.escape="closeSideMenu" aria-label="aside">

    <div class="py-4 text-gray-500 dark:text-gray-400">
        <a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200" href="#">
            <img src="{{ asset('/assets/images/logo.svg') }}" alt="" class="ml-6">
        </a>
        <div class="flex items-center pt-5 pl-5 mt-10 space-x-2 border-t border-gray-100">
            <div>
                <!--Author name-->
                <p class="font-semibold text-gray-900 text-md">{{ Auth::user()->name }}</p>
            </div>
        </div>

        <ul class="mt-6">
            <li class="relative px-6 py-3">
                @if (request()->is('admin/dashboard') || request()->is('admin/dashboard/*') || request()->is('admin/*/dashboard') || request()->is('admin/*/dashboard/*'))
                    <span class="absolute inset-y-0 left-0 w-1 rounded-tr-lg rounded-br-lg bg-serv-bg"
                        aria-hidden="true"></span>
                @endif

                <a class="inline-flex items-center w-full text-sm font-medium text-gray-800 transition-colors duration-150 hover:text-gray-800"
                    href="{{ route('admin.dashboard.index') }}">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M19.5 16V9.02123C19.5 7.75027 18.896 6.55494 17.8728 5.80101L12.3728 1.74838C10.9618 0.708674 9.03823 0.708675 7.6272 1.74838L2.1272 5.80101C1.10401 6.55494 0.5 7.75027 0.5 9.02123V16C0.5 18.2091 2.29086 20 4.5 20H5.75C6.57843 20 7.25 19.3284 7.25 18.5V16C7.25 15.1716 7.92157 14.5 8.75 14.5H11.25C12.0784 14.5 12.75 15.1716 12.75 16V18.5C12.75 19.3284 13.4216 20 14.25 20H15.5C17.7091 20 19.5 18.2091 19.5 16Z"
                            fill="#082431" />
                    </svg>
                    <span class="ml-4">Dashboard</span>
                </a>
            </li>
        </ul>

        <ul>
            <li class="relative px-6 py-2">

                @if (request()->is('admin/siswa') || request()->is('admin/siswa/*') || request()->is('admin/*/siswa') || request()->is('admin/*/siswa/*'))
                    <span class="absolute inset-y-0 left-0 w-1 rounded-tr-lg rounded-br-lg bg-serv-bg"
                        aria-hidden="true"></span>
                @endif

                <a class="inline-flex items-center w-full text-sm font-light transition-colors duration-150 hover:text-gray-800"
                    href="{{ route('admin.siswa.index') }}">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="3" y="3" width="7" height="7" rx="2" stroke="#082431" stroke-width="1.5" />
                        <rect x="3" y="14" width="7" height="7" rx="2" stroke="#082431" stroke-width="1.5" />
                        <rect x="14" y="3" width="7" height="7" rx="2" stroke="#082431" stroke-width="1.5" />
                        <rect x="14" y="14" width="7" height="7" rx="2" stroke="#082431" stroke-width="1.5" />
                    </svg>
                    <span class="ml-4">Persta Didik Baru</span>

                </a>
            </li>

            <li class="relative px-6 py-2">

                @if (request()->is('admin/program_unggulan') || request()->is('admin/program_unggulan/*') || request()->is('admin/*/program_unggulan') || request()->is('admin/*/program_unggulan/*'))
                    <span class="absolute inset-y-0 left-0 w-1 rounded-tr-lg rounded-br-lg bg-serv-bg"
                        aria-hidden="true"></span>
                @endif

                <a class="inline-flex items-center w-full text-sm font-light transition-colors duration-150 hover:text-gray-800"
                    href="{{ route('admin.program_unggulan.index') }}">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="3" y="3" width="7" height="7" rx="2" stroke="#082431" stroke-width="1.5" />
                        <rect x="3" y="14" width="7" height="7" rx="2" stroke="#082431" stroke-width="1.5" />
                        <rect x="14" y="3" width="7" height="7" rx="2" stroke="#082431" stroke-width="1.5" />
                        <rect x="14" y="14" width="7" height="7" rx="2" stroke="#082431" stroke-width="1.5" />
                    </svg>
                    <span class="ml-4">Program Unggulan</span>

                </a>
            </li>

            <li class="relative px-6 py-2">

                @if (request()->is('admin/tenaga_pendidik') || request()->is('admin/tenaga_pendidik/*') || request()->is('admin/*/tenaga_pendidik') || request()->is('admin/*/tenaga_pendidik/*'))
                    <span class="absolute inset-y-0 left-0 w-1 rounded-tr-lg rounded-br-lg bg-serv-bg"
                        aria-hidden="true"></span>
                @endif

                <a class="inline-flex items-center w-full text-sm font-light transition-colors duration-150 hover:text-gray-800"
                    href="{{ route('admin.tenaga_pendidik.index') }}">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="3" y="3" width="7" height="7" rx="2" stroke="#082431" stroke-width="1.5" />
                        <rect x="3" y="14" width="7" height="7" rx="2" stroke="#082431" stroke-width="1.5" />
                        <rect x="14" y="3" width="7" height="7" rx="2" stroke="#082431" stroke-width="1.5" />
                        <rect x="14" y="14" width="7" height="7" rx="2" stroke="#082431" stroke-width="1.5" />
                    </svg>
                    <span class="ml-4">Tenaga Pendidik</span>

                </a>
            </li>

            <li class="relative px-6 py-2">

                @if (request()->is('admin/prestasi') || request()->is('admin/prestasi/*') || request()->is('admin/*/prestasi') || request()->is('admin/*/prestasi/*'))
                    <span class="absolute inset-y-0 left-0 w-1 rounded-tr-lg rounded-br-lg bg-serv-bg"
                        aria-hidden="true"></span>
                @endif

                <a class="inline-flex items-center w-full text-sm font-light transition-colors duration-150 hover:text-gray-800"
                    href="{{ route('admin.prestasi.index') }}">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="3" y="3" width="7" height="7" rx="2" stroke="#082431" stroke-width="1.5" />
                        <rect x="3" y="14" width="7" height="7" rx="2" stroke="#082431" stroke-width="1.5" />
                        <rect x="14" y="3" width="7" height="7" rx="2" stroke="#082431" stroke-width="1.5" />
                        <rect x="14" y="14" width="7" height="7" rx="2" stroke="#082431" stroke-width="1.5" />
                    </svg>
                    <span class="ml-4">Prestasi</span>

                </a>
            </li>

            <li class="relative px-6 py-2">

                @if (request()->is('admin/visi_misi') || request()->is('admin/visi_misi/*') || request()->is('admin/*/visi_misi') || request()->is('admin/*/visi_misi/*'))
                    <span class="absolute inset-y-0 left-0 w-1 rounded-tr-lg rounded-br-lg bg-serv-bg"
                        aria-hidden="true"></span>
                @endif

                <a class="inline-flex items-center w-full text-sm font-light transition-colors duration-150 hover:text-gray-800"
                    href="{{ route('admin.visi_misi.index') }}">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="3" y="3" width="7" height="7" rx="2" stroke="#082431" stroke-width="1.5" />
                        <rect x="3" y="14" width="7" height="7" rx="2" stroke="#082431" stroke-width="1.5" />
                        <rect x="14" y="3" width="7" height="7" rx="2" stroke="#082431" stroke-width="1.5" />
                        <rect x="14" y="14" width="7" height="7" rx="2" stroke="#082431" stroke-width="1.5" />
                    </svg>
                    <span class="ml-4">Visi Misi</span>

                </a>
            </li>

            <li class="relative px-6 py-2">

                @if (request()->is('admin/kurikulum') || request()->is('admin/kurikulum/*') || request()->is('admin/*/kurikulum') || request()->is('admin/*/kurikulum/*'))
                    <span class="absolute inset-y-0 left-0 w-1 rounded-tr-lg rounded-br-lg bg-serv-bg"
                        aria-hidden="true"></span>
                @endif

                <a class="inline-flex items-center w-full text-sm font-light transition-colors duration-150 hover:text-gray-800"
                    href="{{ route('admin.kurikulum.index') }}">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="3" y="3" width="7" height="7" rx="2" stroke="#082431" stroke-width="1.5" />
                        <rect x="3" y="14" width="7" height="7" rx="2" stroke="#082431" stroke-width="1.5" />
                        <rect x="14" y="3" width="7" height="7" rx="2" stroke="#082431" stroke-width="1.5" />
                        <rect x="14" y="14" width="7" height="7" rx="2" stroke="#082431" stroke-width="1.5" />
                    </svg>
                    <span class="ml-4">Kurikulum</span>

                </a>
            </li>

            <li class="relative px-6 py-2">

                @if (request()->is('admin/identitas_web') || request()->is('admin/identitas_web/*') || request()->is('admin/*/identitas_web') || request()->is('admin/*/identitas_web/*'))
                    <span class="absolute inset-y-0 left-0 w-1 rounded-tr-lg rounded-br-lg bg-serv-bg"
                        aria-hidden="true"></span>
                @endif

                <a class="inline-flex items-center w-full text-sm font-light transition-colors duration-150 hover:text-gray-800"
                    href="{{ route('admin.identitas_web.index') }}">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="3" y="3" width="7" height="7" rx="2" stroke="#082431" stroke-width="1.5" />
                        <rect x="3" y="14" width="7" height="7" rx="2" stroke="#082431" stroke-width="1.5" />
                        <rect x="14" y="3" width="7" height="7" rx="2" stroke="#082431" stroke-width="1.5" />
                        <rect x="14" y="14" width="7" height="7" rx="2" stroke="#082431" stroke-width="1.5" />
                    </svg>
                    <span class="ml-4">Identitas Web</span>

                </a>
            </li>
        </ul>

        <ul>
            <li class="relative px-6 py-3">
                <a class="inline-flex items-center w-full text-sm font-light transition-colors duration-150 hover:text-gray-800"
                    href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">

                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="24" height="24" fill="white" />
                        <path
                            d="M15 7.5V7C15 4.79086 13.2091 3 11 3H7C4.79086 3 3 4.79086 3 7V17C3 19.2091 4.79086 21 7 21H11C13.2091 21 15 19.2091 15 17V16.5"
                            stroke="#082431" stroke-width="1.5" stroke-linecap="round" />
                        <path d="M18.5 9.5L20.8586 11.8586C20.9367 11.9367 20.9367 12.0633 20.8586 12.1414L18.5 14.5"
                            stroke="#082431" stroke-width="1.5" stroke-linecap="round" />
                        <path d="M9.5 12L20 12" stroke="#082431" stroke-width="1.5" stroke-linecap="round" />
                    </svg>

                    <span class="ml-4">Log out</span>

                    <form action="{{ route('logout') }}" id="logout-form" method="POST" style="display: none;">
                        @csrf
                    </form>

                </a>
            </li>

        </ul>

    </div>
</aside>
