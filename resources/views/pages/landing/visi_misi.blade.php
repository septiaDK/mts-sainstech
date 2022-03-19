@extends('layouts.front')

@section('title', 'Visi Misi')

@section('content')
    <div class="content">
        <div class="mx-auto flex pt-16 pb-16 lg:pb-20 lg:px-24 md:px-16 sm:px-8 px-8 lg:flex-row flex-col">
            <div class="flex flex-col w-full">
                <div class="bg-white rounded shadow border p-6">
                    <h6 class="sm:text-2xl text-xl font-bold mb-4 mt-0">Visi</h6>
                    <p class="text-gray-700 text-sm">"{{ $visi->name ?? '' }}"</p>
                </div>
                <div class="bg-white rounded shadow border p-6 mt-5">
                    <h6 class="sm:text-2xl text-xl font-bold mb-4 mt-0">Misi</h6>
                    @forelse ($misi as $key => $item)
                        <p class="text-gray-700 text-sm mt-2"><span class="font-bold">{{ ++$key.'. ' }}</span>{{ $item->name ?? '' }}</p>
                    @empty
                        {{-- empty --}}
                    @endforelse
                </div>
            </div>

        </div>
    </div>
@endsection
