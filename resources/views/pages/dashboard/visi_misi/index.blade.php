@extends('layouts.app')

@section('title', 'Visi Misi')

@section('content')
    <main class="h-full overflow-y-auto">
        <div class="container mx-auto">
            <div class="grid w-full gap-5 px-10 mx-auto md:grid-cols-12">
                <div class="col-span-8">
                    <h2 class="mt-8 mb-1 text-2xl font-semibold text-gray-700">
                        Visi Misi
                    </h2>
                </div>
                <div class="col-span-4 lg:text-right">
                    <div class="relative mt-0 md:mt-6">
                        <a href="{{ route('admin.visi_misi.create') }}"
                            class="inline-block px-4 py-2 mt-2 text-left text-white rounded-xl bg-serv-button">
                            + Tambah
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
                                    <th class="py-4 text-center" scope="">Jenis</th>
                                    <th class="py-4 text-center" scope="">Nama</th>
                                    <th class="py-4 text-center" scope="">Action</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                @forelse ($visi_misi as $item)
                                    <tr class="text-gray-700 border-b">
                                        <td class="px-1 py-5 text-sm">
                                            @if ($item->jenis == '1')
                                                <p class="px-4 py-2 mt-2 inline text-left text-green-500">
                                                    Visi
                                                </p>
                                            @else
                                                <p class="px-4 py-2 mt-2 inline text-left text-red-500">
                                                    Misi
                                                </p>
                                            @endif
                                        </td>
                                        <td class="px-1 py-5 text-sm">
                                            {{ $item->name ?? '' }}
                                        </td>
                                        <td class="w-2/6 px-1 py-5 text-sm text-center">
                                            <a href="{{ route('admin.visi_misi.edit', $item->id) }}"
                                                class="px-4 py-2 mt-1 mr-2 text-center text-white rounded-xl bg-serv-button">Edit</a>

                                            <a href="{{ route('admin.visi_misi.destroy', $item->id) }}"
                                                class="px-4 py-2 mt-2 text-center text-white rounded-xl bg-red-400"
                                                onclick="event.preventDefault(); document.getElementById('delete-form{{ $item->id }}').submit();">Delete</a>

                                            <form action="{{ route('admin.visi_misi.destroy', $item->id) }}"
                                                id="delete-form{{ $item->id }}" method="POST" style="display: none;">
                                                @csrf
                                                @method("DELETE")
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    {{-- emppty --}}
                                    <tr>
                                        <td colspan="3" class="text-center px-1 py-5 text-sm">NO DATA</td>
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
