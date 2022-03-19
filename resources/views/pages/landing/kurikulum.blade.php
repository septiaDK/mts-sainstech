@extends('layouts.front')

@section('title', 'Akademik')

@section('content')
    <!-- content -->
    <div class="content">
        <!-- services -->
        <div class="bg-serv-bg-explore overflow-hidden">
            <div class="pt-16 pb-16 lg:pb-20 lg:px-24 md:px-16 sm:px-8 px-8 mx-auto">
                <div class="text-center">
                    <h1 class="text-3xl font-semibold mb-1">Kurikulum</h1>
                    <p class="leading-8 text-serv-text mb-10">
                        Struktur Muatan Kurikulum
                    </p>
                </div>
                <section class="container px-6 mx-auto mt-5">
                    <div class="grid gap-5 md:grid-cols-12">
                        <main class="col-span-12 p-4 md:pt-0">
                            <div class="px-6 py-2 mt-2 bg-white rounded-xl">
                                <table class="w-full" aria-label="Table">
                                    <thead>
                                        <tr class="text-sm font-normal text-left text-gray-900 border-b border-b-gray-600">
                                            <th class="py-4 text-center" scope="" rowspan="2">No.</th>
                                            <th class="py-4 text-center" scope="" rowspan="2">Mata Pelajaran</th>
                                            <th class="py-4 text-center" scope="" colspan="3">Alokasi Waktu Per Minggu</th>
                                        </tr>
                                        <tr class="text-sm font-normal text-left text-gray-900 border-b border-b-gray-600">
                                            <th class="py-4" scope="">VII</th>
                                            <th class="py-4" scope="">VIII</th>
                                            <th class="py-4" scope="">IX</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white">
                                        @forelse ($kurikulum as $key => $item)
                                            <tr class="text-gray-700 border-b">
                                                <td class="px-1 py-5 text-sm">{{ ++$key . '. ' }}</td>
                                                <td class="px-1 py-5 text-sm">{{ $item->name ?? '' }}</td>
                                                <td class="px-1 py-5 text-sm">{{ $item->vii ?? '' }}</td>
                                                <td class="px-1 py-5 text-sm">{{ $item->viii ?? '' }}</td>
                                                <td class="px-1 py-5 text-sm">{{ $item->ix ?? '' }}</td>
                                            </tr>
                                        @empty
                                            {{-- empty --}}
                                            <tr>
                                                <td colspan="5" class="text-center px-1 py-5 text-sm">NO DATA</td>
                                            </tr>
                                        @endforelse


                                    </tbody>
                                </table>
                            </div>
                        </main>
                    </div>
                </section>
            </div>
        </div>

    </div>
@endsection
