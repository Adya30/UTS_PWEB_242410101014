@extends('layouts.app')

@section('content')
<div class="px-5 py-8 flex justify-center">

    <div class="bg-blue-600 text-white p-6 rounded-2xl w-full max-w-2xl shadow">

        <h2 class="text-2xl font-bold mb-6 text-center">Profile</h2>

        <div class="flex justify-center mb-6">
            <img src="{{ asset('images/yoru.png') }}" class="w-40 h-40 rounded-full border-2 border-white object-cover">
        </div>

        <div class="flex justify-between mb-3 border-b border-white/30 pb-2">
            <span class="flex items-center gap-2">
                <i class="fa-solid fa-id-badge"></i>
                Username
            </span>
            <span><b>{{ $username }}</b></span>
        </div>

        @foreach($bio as $b)
            <div class="flex justify-between mb-3 border-b border-white/30 pb-2">
                <span class="flex items-center gap-2">
                    <i class="fa-solid fa-location-dot"></i>
                    Alamat
                </span>
                <span>{{ $b['Alamat'] }}</span>
            </div>

            <div class="flex justify-between mb-3 border-b border-white/30 pb-2">
                <span class="flex items-center gap-2">
                    <i class="fa-solid fa-briefcase"></i>
                    Status
                </span>
                <span>{{ $b['Status'] }}</span>
            </div>

            <div class="flex justify-between">
                <span class="flex items-center gap-2">
                    <i class="fa-solid fa-star"></i>
                    Fans
                </span>
                <span>{{ $b['Fans'] }}</span>
            </div>
        @endforeach

    </div>
</div>
@endsection
