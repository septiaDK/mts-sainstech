@extends('layouts.app')

@section('title', 'Kurikulum')

@section('content')
    <main class="h-full overflow-y-auto">
        <div class="container mx-auto">
            <div class="grid w-full gap-5 px-10 mx-auto md:grid-cols-12">
                <div class="col-span-8">
                    <h2 class="mt-8 mb-1 text-2xl font-semibold text-gray-700">
                        Kurikulum
                    </h2>
                </div>
                <div class="col-span-4 lg:text-right">
                    <div class="relative mt-0 md:mt-6">
                        <a href="{{ route('admin.kurikulum.create') }}"
                            class="inline-block px-4 py-2 mt-2 text-left text-white rounded-xl bg-serv-button">
                            + Tambah Kurikulum
                        </a>
                    </div>
                </div>
            </div>
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
                                    <th class="py-4 text-center" scope="" rowspan="2">Action</th>
                                </tr>
                                <tr class="text-sm font-normal text-left text-gray-900 border-b border-b-gray-600">
                                    <th class="py-4 text-center" scope="">VII</th>
                                    <th class="py-4 text-center" scope="">VIII</th>
                                    <th class="py-4 text-center" scope="">IX</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                @forelse ($kurikulum as $key => $item)
                                    <tr class="text-gray-700 border-b">
                                        <td class="px-1 py-5 text-sm text-center">
                                            {{ ++$key.'. ' }}
                                        </td>
                                        <td class="px-1 py-5 text-sm">
                                            {{ $item->name ?? '' }}
                                        </td>
                                        <td class="px-1 py-5 text-sm text-center">
                                            {{ $item->vii ?? '' }}
                                        </td>
                                        <td class="px-1 py-5 text-sm text-center">
                                            {{ $item->viii ?? '' }}
                                        </td>
                                        <td class="px-1 py-5 text-sm text-center">
                                            {{ $item->ix ?? '' }}
                                        </td>
                                        <td class="w-2/6 px-1 py-5 text-sm text-center">
                                            <a href="{{ route('admin.kurikulum.edit', $item->id) }}"
                                                class="px-4 py-2 mt-1 mr-2 text-center text-white rounded-xl bg-serv-button">Edit</a>

                                            <a href="{{ route('admin.kurikulum.destroy', $item->id) }}"
                                                class="px-4 py-2 mt-2 text-center text-white rounded-xl bg-serv-email"
                                                onclick="event.preventDefault(); document.getElementById('delete-form{{ $item->id }}').submit();">Delete</a>

                                            <form action="{{ route('admin.kurikulum.destroy', $item->id) }}"
                                                id="delete-form{{ $item->id }}" method="POST" style="display: none;">
                                                @csrf
                                                @method("DELETE")
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    {{-- emppty --}}
                                    <tr>
                                        <td colspan="6" class="text-center px-1 py-5 text-sm">NO DATA</td>
                                    </tr> 
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </main>
            </div>
        </section>
    </main>
@endsection
