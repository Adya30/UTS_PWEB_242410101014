@extends('layouts.app')

@section('content')
<div class="hero flex items-center justify-center h-screen">
    <div class="rounded-lg bg-white/50 p-10 shadow-md max-w-md w-full text-center">
        <h2 class="text-3xl text-gray-800 font-bold mb-8">Login</h2>
        <p class="text-gray-800 mb-4 italic">"Hai, Selamat Datang di Tenki No Ko"</p>

        @if(session('error'))
        <div class="bg-red-200/50 rounded-lg p-4 mb-4">
            <p class="text-red-500">{{ session('error') }}</p>
        </div>
        @endif

        <form action="{{ route('login.process') }}" method="POST">
            @csrf
            <input type="text" name="username" class="w-full bg-white/50 border border-gray-300 rounded-xl shadow-md p-3 mb-4" placeholder="Masukkan Username">
            <button class="bg-blue-600 rounded-xl text-white px-4 py-2 w-full hover:bg-blue-500 cursor-pointer">Login</button>
        </form>
    </div>
</div>
@endsection
