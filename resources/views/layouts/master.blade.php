<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Flowbite CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />

    <!-- DaisyUI CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />

    <!-- Custom CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">


    @stack('styles')
</head>

<body class="bg-slate-100">

    <!-- Navbar -->
    <div class="navbar bg-base-100 shadow-sm sticky top-0 w-full z-50">
        <div class="flex justify-between items-center w-full px-5">
            <!-- Logo (Visible on desktop and tablet) -->
            <a href="/" class="flex items-center space-x-2">
                <img src="{{ asset('images/logo.png') }}" alt="Voice of Maranatha Logo" class="h-10 w-auto">
            </a>
    
            <!-- Menu (Visible on desktop and tablet, hidden on mobile) -->
            <ul id="nav-menu" class="hidden md:flex space-x-6 text-center font-semibold">
                <li><a href="#visi-misi">Visi Misi</a></li>
                <li><a href="#tentang-kami">Tentang Kami</a></li>
                <li><a href="#divisi">Divisi</a></li>
                <li><a href="#berita">Berita</a></li>
                <li><a href="#galeri">Galeri</a></li>
                <li><a href="#faq">FAQ</a></li>
                <li><a href="#hubungi">Hubungi Kami</a></li>
            </ul>
        </div>
    </div>
    

    <!-- Content -->
    <div class="mx-auto mt-4">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="footer sm:footer-horizontal bg-[#4B6363] text-white p-10">
        <aside>
            <img src="{{ asset('images/logo-putih.png') }}" class="w-36" alt="">
            <p class="text-lg font-semibold">Voice of Maranatha</p>
            <p class="text-sm">Melayani dengan hati, berkarya dalam musik sejak 2002.</p>
        </aside>

        <nav>
            <h6 class="footer-title text-lg font-bold">Navigasi</h6>
            <a href="#visi-misi" class="link link-hover">Visi & Misi</a>
            <a href="#tentang-kami" class="link link-hover">Tentang Kami</a>
            <a href="#divisi" class="link link-hover">Divisi</a>
            <a href="#berita" class="link link-hover">Berita</a>
            <a href="#galeri" class="link link-hover">Galeri</a>
            <a href="#faq" class="link link-hover">FAQ</a>
            <a href="#contact" class="link link-hover">Hubungi Kami</a>
        </nav>

        <nav>
            <h6 class="footer-title text-lg font-bold">Sosial Media</h6>
            <div class="flex">
                <a href="#" class="flex">
                    <span class="iconify w-6 h-6" data-icon="fe-instagram"></span>
                    <p class="text-sm pl-3">voiceofmaranatha</p>
                </a>
            </div>
            <div class="flex">
                <a href="#" class="flex">
                    <span class="iconify w-6 h-6" data-icon="fe-google"></span>
                    <p class="text-sm pl-3">voiceofmaranathamcu@gmail.com</p>
                </a>
            </div>
            <div class="flex">
                <a href="#" class="flex">
                    <span class="iconify w-6 h-6" data-icon="fe-youtube"></span>
                    <p class="text-sm pl-3">Voice of Maranatha</p>
                </a>
            </div>
            <div class="flex">
                <a href="#" class="flex">
                    <span class="iconify w-6 h-6" data-icon="ic:baseline-tiktok"></span>
                    <p class="text-sm pl-3">Voice of Maranatha</p>
                </a>
            </div>
        </nav>
    </footer>


    @stack('scripts')

    <!-- Flowbite JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

    <!-- DaisyUI JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <!-- Typed.js -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>

    <!-- AOS JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

    <!-- Typed.js CDN -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

    <!-- Menambahkan file JavaScript -->
    <script src="{{ asset('js/script.js') }}"></script>

    <script>
        AOS.init({
            once: false
        });
      </script>

</body>

</html>
