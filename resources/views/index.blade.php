@extends('layouts.master')

@section('title', 'User Dashboard')

@section('content')

<!-- Hero Section -->
<section class="relative flex items-start justify-center min-h-screen pt-16">
    <!-- Container -->
    <div class="mx-auto w-full max-w-7xl md:px-10 md:py-16 lg:py-20">
        <!-- Heading Div -->
        <div class="mx-auto mb-12 w-full max-w-2xl text-center md:mb-16 lg:mb-20">
            <h1 id="typed" class="mb-4 text-4xl sm:text-5xl md:text-6xl font-semibold inline-block"></h1>
            <p class="mx-auto mb-5 text-lg sm:text-xl text-[#636262] lg:mb-8 leading-relaxed">
                Voice of Maranatha (VOM) merupakan unit kegiatan mahasiswa yang bergerak
                dalam bidang pelayanan, baik internal maupun eksternal, yang dibentuk pada
                2002 oleh para mahasiswa yang rindu akan adanya pelayanan musik kristiani di kampus.
            </p>
            <!-- Button Wrap -->
            <div class="flex justify-center">
                <button onclick="location.href='#visi-misi'"
                    class="mr-5 inline-block rounded-xl bg-white px-6 py-3 sm:px-8 sm:py-4 text-center font-semibold text-black 
                    hover:bg-black hover:text-white transition-colors duration-800
                    border-2 border-[#E67817] shadow-lg"
                    data-aos="pulse" data-aos-duration="200" data-aos-easing="ease-in-out" data-aos-iteration="infinite">
                    Tentang Kami
                </button>

            </div>
        </div>
    </div>
</section>


<div class="absolute -bottom-21 left-0 w-full h-[300px] bg-no-repeat bg-cover bg-center" 
    style="background-image: url('{{ asset('images/element.png') }}');">
</div>

<!-- Visi Misi Section -->
<section class="relative mt-4 py-12" id="visi-misi">
    <div class="container mx-auto px-5">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold">Visi dan Misi</h2>
        </div>
        <div class="flex flex-col md:flex-row gap-8" data-aos="fade-down" data-aos-duration="1000">
            <!-- Card Visi -->
            <div id="vision-card"
                class="w-full md:w-1/2 p-6 border-2 border-[#E67817] rounded-xl shadow-lg 
                transition-transform duration-300 hover:scale-105">
                <h3 class="text-2xl font-semibold mb-4">Visi</h3>
                <p class="text-gray-700">
                    {{ $visiMisi->visi ?? 'Data belum tersedia' }}
                </p>
            </div>

            <!-- Card Misi -->
            <div id="mission-card"
                class="w-full md:w-1/2 p-6 border-2 border-[#E67817] rounded-xl shadow-lg 
                transition-transform duration-300 hover:scale-105">
                <h3 class="text-2xl font-semibold mb-4">Misi</h3>
                <p class="text-gray-700">
                    {!! $misi !!}
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Transition Background Between Sections -->
<div class="relative z-10 w-full h-[380px] bg-no-repeat bg-cover bg-center" 
    style="background-image: url('{{ asset('images/element2.png') }}');">
</div>


<!-- Tentang Kami Section -->
<section class="relative py-32 bg-red-700 w-full -mt-24 z-0" id="tentang-kami">
    <div class="px-5 md:px-10">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-white">Tentang Kami</h2>
        </div>

        <div class="relative max-w-4xl mx-auto">
            <!-- Garis tengah -->
            <div class="absolute top-0 bottom-0 w-1 bg-gray-300 left-1/2 transform -translate-x-1/2"></div>

            <!-- Looping Data dari Database -->
            <div class="space-y-20 relative">
                @foreach ($aboutUs as $index => $item)
                <div class="relative flex items-center w-full {{ $index % 2 == 0 ? '' : 'flex-row-reverse' }}">
                    <!-- Card -->
                    <div class="w-3/4 {{ $index % 2 == 0 ? 'mr-20' : 'ml-20' }}">
                        <div class="w-full p-6 border-2 border-[#E67817] bg-[#E67817] text-white rounded-xl shadow-lg 
                                    transition-transform duration-300 hover:scale-105 card-animate opacity-0" data-aos="fade-down" data-aos-duration="1000">
                            <h3 class="text-2xl font-semibold mb-4">{{ $item->title }}</h3>
                            <p class="text-white">
                                {{ $item->description }}
                            </p>
                        </div>
                    </div>

                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>


<!-- Section Divisi -->
<section class="py-16 bg-gray-100" id="divisi">
    <div class="container mx-auto px-5">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800">Divisi Kami</h2>
        </div>

        <!-- Grid Divisi -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            @foreach ($divisis as $item)
            <div class="bg-white border-2 border-orange-500 rounded-xl shadow-lg shadow-orange-500 overflow-hidden transform transition duration-300 hover:scale-105 max-w-sm mx-auto" data-aos="fade-down" data-aos-duration="1000">
                <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" class="w-full h-48 object-cover">
                <div class="p-4 text-left">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">{{ $item->title }}</h3>
                    <p class="text-gray-700 text-sm mb-3">{{ Str::limit($item->description, 100, '...') }}</p>
                    <!-- Button "Lihat Detail" di divisi -->
                    <a href="{{ route('divisi.show', $item->id) }}">
                        <button class="inline-block rounded-xl bg-white px-5 py-2 sm:px-6 sm:py-3 text-center font-semibold text-black 
                            hover:bg-[#4B6363] hover:text-white transition duration-300 border border-[#4B6363] shadow-lg">
                            Lihat Detail
                        </button>
                    </a>
                </div>
            </div>            
            @endforeach
        </div>
    </div>
</section>


<!-- Section Berita -->
<section class="py-16 bg-white" id="berita">
    <div class="container mx-auto px-5">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800">Berita Terbaru</h2>
        </div>

        <!-- Grid Berita -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            @foreach ($beritas as $item)
            <div class="bg-white border-2 border-orange-500 rounded-xl shadow-lg shadow-orange-500 overflow-hidden transform transition duration-300 hover:scale-105 max-w-sm mx-auto" data-aos="fade-down" data-aos-duration="1000">
                <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" class="w-full h-48 object-cover">
                <div class="p-4 text-left">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">{{ $item->title }}</h3>
                    <p class="text-gray-700 text-sm mb-3">
                        {{ Str::limit($item->content, 100, '...') }}
                    </p>
                    <!-- Button "Baca Selengkapnya" di berita -->
                    <a href="{{ route('berita.show', $item->id) }}">
                        <button class="inline-block rounded-xl bg-white px-5 py-2 sm:px-6 sm:py-3 text-center font-semibold text-black 
                            hover:bg-[#4B6363] hover:text-white transition duration-300 border border-[#4B6363] shadow-lg">
                            Baca Selengkapnya
                        </button>
                    </a>
                </div>
            </div>            
            @endforeach
        </div>
    </div>
</section>


<!-- Section Galeri -->
<section class="py-16 bg-gray-100" id="galeri">
    <div class="container mx-auto px-5">
        <div class="text-center mb-8">
            <h2 class="text-3xl font-bold text-gray-800">Galeri Kegiatan</h2>
        </div>

        <!-- Grid Galeri -->
        <div class="grid grid-cols-3 gap-3 md:gap-4" data-aos="fade-down" data-aos-duration="1000">
            @foreach ($galeris as $item)
            <div class="w-32 h-32 md:w-40 md:h-40 lg:w-80 lg:h-80 mx-auto overflow-hidden rounded-lg shadow-md">
                <img class="w-full h-full object-cover transition duration-300 filter grayscale hover:grayscale-0" 
                     src="{{ asset('storage/' . $item->image) }}" 
                     alt="Galeri Kegiatan">
            </div>
            @endforeach
        </div>

        <!-- Button "Lihat Lebih Banyak" -->
        @if ($galeris->count() >= 1)
        <div class="text-center mt-6">
            <a href="{{ route('galeri.show') }}">
                <button class="inline-block rounded-xl bg-white px-5 py-2 sm:px-6 sm:py-3 text-center font-semibold text-black 
                    hover:bg-[#4B6363] hover:text-white transition duration-300 border border-[#4B6363] shadow-lg">
                    Lihat Lebih Banyak
                </button>
            </a>
        </div>
        @endif
    </div>
</section>


<!-- Section FAQ -->
<!-- FAQ Section -->
<section class="py-16 bg-gray-100" id="faq">
    <div class="container mx-auto px-5">
        <div class="text-center mb-8">
            <h2 class="text-3xl font-bold text-gray-800">Frequently Asked Questions (FAQ)</h2>
        </div>

        <!-- Accordion FAQ -->
        <div id="accordion-flush" data-accordion="collapse" data-active-classes="bg-white text-gray-900" data-inactive-classes="text-gray-500">
            @foreach ($faqs as $index => $faq)
            <h2 id="accordion-flush-heading-{{ $index }}">
                <button type="button" 
                    class="flex items-center justify-between w-full py-5 font-medium text-gray-500 border-b border-gray-200 gap-3 transition-all"
                    data-accordion-target="#accordion-flush-body-{{ $index }}" 
                    aria-expanded="false" 
                    aria-controls="accordion-flush-body-{{ $index }}">
                    <span>{{ $faq->question }}</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0 transition-transform duration-300" 
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                </button>
            </h2>
            <div id="accordion-flush-body-{{ $index }}" class="hidden" aria-labelledby="accordion-flush-heading-{{ $index }}">
                <div class="py-5 border-b border-gray-200">
                    <p class="text-gray-500">{{ $faq->answer }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Section Contact Us -->
<section class="py-16 bg-[#C52C24]" id="contact">
    <div class="container mx-auto px-5">
        <div class="text-center mb-8">
            <h2 class="text-3xl font-bold text-white">Hubungi Kami</h2>
        </div>

        <!-- Grid untuk Kontak & Maps -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                    
        <!-- Bagian Kontak (Kiri) -->
        <div class="space-y-6 text-left bg-orange-500 p-6 rounded-xl" data-aos="fade-up" data-aos-duration="1000">
            <p class="font-medium text-white">Contact us</p>
            <h1 class="text-2xl font-semibold text-white md:text-3xl">Get in touch</h1>
            <p class="text-white">Tim kami dengan senang hati akan mendengar dari Anda.</p>

            <!-- Instagram -->
            <div class="flex items-center space-x-4">
                <span class="inline-block p-3 text-white rounded-full bg-orange-100">
                    <span class="iconify w-6 h-6 text-orange-500" data-icon="mdi:instagram"></span>
                </span>
                <p class="text-m font-semibold text-white">
                    voiceofmaranatha
                </p>
            </div>

            <!-- Google (Email) -->
            <div class="flex items-center space-x-4">
                <span class="inline-block p-3 text-white rounded-full bg-orange-100">
                    <span class="iconify w-6 h-6 text-orange-500" data-icon="mdi:email-outline"></span>
                </span>
                <p class="text-m font-semibold text-white">
                    voiceofmaranathamcu@gmail.com
                </p>
            </div>

            <!-- WhatsApp -->
            <div class="flex items-center space-x-4">
                <span class="inline-block p-3 text-white rounded-full bg-orange-100">
                    <span class="iconify w-6 h-6 text-orange-500" data-icon="mdi:whatsapp"></span>
                </span>
                <p class="text-m font-semibold text-white">
                    +62 816-902-452 (Adriel J)
                </p>
            </div>
        </div>

            <!-- Bagian Maps (Kanan) -->
            <div class="overflow-hidden rounded-lg h-96 shadow-md" data-aos="fade-down" data-aos-duration="1000">
                <iframe 
                    class="w-full h-full"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31696.640479805437!2d107.57311668952636!3d-6.887174485923624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7cfbda2fca1%3A0x30f0d0a3d4f0d7b1!2sUniversitas%20Kristen%20Maranatha!5e0!3m2!1sen!2sid!4v1712020200000"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>
</section>

@endsection
