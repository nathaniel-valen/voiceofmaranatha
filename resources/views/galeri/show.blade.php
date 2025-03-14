@extends('layouts.master')

@section('title', 'Galeri')

@section('content')

<!-- Detail Divisi Section -->
<section class="py-16 bg-gray-100" id="galeri">
    <div class="container mx-auto px-5">
        <div class="flex items-center mb-12 w-full max-w-2xl">
            <!-- Button Back -->
            <a href="/#galeri" class="inline-flex items-center px-4 mt-2 text-black">
                <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
            </a>
            <!-- Title -->
            <h1 class="text-4xl sm:text-5xl md:text-6xl font-semibold">Galeri</h1>
        </div>

        <!-- Grid Galeri -->
        <div class="grid grid-cols-3 gap-3 md:gap-4">
            @foreach ($galeri as $item)
            <div class="w-32 h-32 md:w-40 md:h-40 lg:w-80 lg:h-80 mx-auto overflow-hidden rounded-lg shadow-md">
                <img class="w-full h-full object-cover transition duration-300 filter grayscale hover:grayscale-0" 
                     src="{{ asset('storage/' . $item->image) }}" 
                     alt="Galeri Kegiatan">
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
