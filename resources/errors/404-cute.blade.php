{{-- resources/views/errors/404-cute.blade.php --}}
@extends('layouts.app')

@section('title', '404 Not Found')

@section('content')
<div class="min-h-screen flex flex-col justify-center items-center bg-pink-100 text-center">
    <h1 class="text-7xl font-bold text-pink-500 mb-4 animate-bounce">404</h1>
    <p class="text-xl text-gray-700 mb-6">Yah, halamannya nggak ketemu 😢</p>
    <a href="{{ route('dashboard') }}"
       class="bg-pink-500 text-white px-6 py-2 rounded-lg hover:bg-pink-600 transition-all duration-200">
        Balik ke Dashboard
    </a>
</div>
@endsection
