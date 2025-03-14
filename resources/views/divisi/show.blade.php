@extends('layouts.master')

@section('title', 'Detail Divisi')

@section('content')

<!-- Detail Divisi Section -->
<section class="relative flex items-start justify-center min-h-screen">
    <!-- Container -->
    <div class="mx-auto w-full max-w-8xl md:px-10 md:py-16 lg:py-20">
        <!-- Heading Div (judul di kiri atas dengan tombol back) -->
        <div class="flex items-center mb-12 w-full max-w-2xl">
            <!-- Button Back -->
            <a href="/#divisi" class="inline-flex items-center px-4 mt-2 text-black">
                <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
            </a>
            <!-- Title -->
            <h1 class="text-4xl sm:text-5xl md:text-6xl font-semibold">{{ $divisi->title }}</h1>
        </div>
        
        <!-- Content Section -->
        <div id="divisi" class="container mx-auto px-4 flex flex-col md:flex-row">
            <!-- Divisi Image (gambar di kiri) -->
            <div class="w-full md:w-1/2 px-4 mb-6 md:mb-0 flex-shrink-0">
                <img src="{{ asset('storage/' . $divisi->image) }}" alt="{{ $divisi->title }}" class="object-cover w-full h-full rounded-xl">
            </div>
            <!-- Divisi Details (konten di kanan) -->
            <div class="w-full md:w-1/2 px-4">
                <div class="bg-gray-100 p-6 rounded-xl shadow-lg">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Deskripsi</h2>
                    <div class="prose text-sm text-gray-700">
                        {!! $desc_divisi !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
