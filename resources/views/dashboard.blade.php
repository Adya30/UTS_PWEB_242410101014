@extends('layouts.app')

@section('content')
<div class="px-6 py-7">

    <div class="dash py-5 px-5 rounded-2xl text-white mb-3">
        <div class="bg-blue-500/50 p-5 w-70 rounded-xl shadow text-shadow-amber-50">
            <h2 class="text-2xl font-bold">Dashboard</h2>
            <p class="pt-3">Selamat datang, <span class="font-bold">{{ $username }}</span></p>
        </div>
    </div>


    <div class="px-3 grid grid-cols-1 md:grid-cols-3 rounded-2xl bg-blue-300">
        @foreach($statistik as $item)
        <div class="bg-white p-5 rounded-xl shadow border-3 border-blue-200 transition m-5">
            <h3 class="text-blue-800 text-xl font-bold">{{ $item['judul'] }} :</h3>
            <p class="text-2xl font-bold mt-2">{{ $item['nilai'] }}</p>
            <div class="flex justify-end">
                <p class="text-sm text-white p-1 bg-blue-500 px-3 rounded-2xl hover:bg-blue-400">{{ $item['status'] }}</p>
            </div>
        </div>
        @endforeach
    </div>

</div>

@endsection
