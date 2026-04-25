@extends('layouts.app')

@section('title', 'Pengelolaan Episode')

@section('content')
<div class="px-6 py-7">

    <div class="yoru p-5 rounded-2xl text-white mb-6 shadow">
        <div class="flex justify-between items-center">
            <div>
                <h2 class="text-2xl font-bold">Pengelolaan Episode</h2>
                <p class="pt-2">Daftar Episode Anime Tenki No Ko</p>
            </div>
            <a href="/pengelolaan" class="bg-blue-700 px-4 py-2 rounded-3xl shadow hover:bg-blue-600 transition">Tambah</a>
        </div>
    </div>

    <div class="grid grid-cols-1 xl:grid-cols-3 gap-6 bg-blue-300 p-5 rounded-2xl">
        @foreach($data as $item)
            <div class="bg-white p-5 rounded-xl border-2 border-blue-400 shadow hover:shadow-lg transition">
                <h3 class="text-blue-800 text-xl font-bold mb-4">
                    {{ $item['judul'] }}
                </h3>

                <img src="{{ asset('images/ume.png') }}" class="rounded-2xl border-2 border-white object-cover">
                <p class="text-gray-600 pt-5 text-sm leading-relaxed">
                    {{ $item['deskripsi'] }}
                </p>

                <div class="flex justify-end mt-4">
                    <span class="text-xs px-3 py-1 bg-blue-500 text-white rounded-2xl hover:bg-blue-400 transition">
                        Detail
                    </span>
                </div>
            </div>
        @endforeach
    </div>

</div>
@endsection
