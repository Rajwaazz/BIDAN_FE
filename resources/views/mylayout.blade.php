<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="abdul rahim" />
    <title>@yield('title', 'Landing Page | PMB Dyah Sumarmo')</title>
    <link href="{{ url('') }}/assets/img/hero.png" rel="icon">
    <link href="{{ url('') }}/assets/img/hero.png" rel="apple-touch-icon">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex flex-col">
    <header id="navbar" class="fixed top-0 left-0 w-full z-50 px-4 sm:px-8 lg:px-16 xl:px-40 2xl:px-64">
        <div class="hidden md:flex justify-between items-center py-2 border-b text-sm py-3" style="border-color: rgba(255, 255, 255, 0.25)" >
            <div class="">
                <ul class="flex text-white">
                    <li>
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current text-white" viewBox="0 0 24 24" >
                            <path
                                d="M12,2C7.589,2,4,5.589,4,9.995C3.971,16.44,11.696,21.784,12,22c0,0,8.029-5.56,8-12C20,5.589,16.411,2,12,2z M12,14 c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S14.21,14,12,14z"/>
                            </svg>

                            <a href="https://maps.app.goo.gl/pbE2sxMwGEVsQdrX6" target="_blank" title="Klik untuk melihat di Google Maps" class="ml-2 text-white hover:underline" >
                                Kuncen 9/2 Tanjungsari Banyudono Boyolali
                            </a>
                        </div>
                    </li>
                    <li class="ml-6">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current text-white" viewBox="0 0 24 24" >
                            <path
                                d="M14.594,13.994l-1.66,1.66c-0.577-0.109-1.734-0.471-2.926-1.66c-1.193-1.193-1.553-2.354-1.661-2.926l1.661-1.66 l0.701-0.701L5.295,3.293L4.594,3.994l-1,1C3.42,5.168,3.316,5.398,3.303,5.643c-0.015,0.25-0.302,6.172,4.291,10.766 C11.6,20.414,16.618,20.707,18,20.707c0.202,0,0.326-0.006,0.358-0.008c0.245-0.014,0.476-0.117,0.649-0.291l1-1l0.697-0.697 l-5.414-5.414L14.594,13.994z"/>
                            </svg>
                            <span class="ml-2 font-sans">+62 822-2522-9329</span>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="">
                <ul class="flex justify-end text-white">
                    <li class="md:mr-4">
                        <a class="inline-block font-semibold px-4 py-2 text-white bg-blue-600 md:bg-transparent md:text-white border border-white rounded-full"
                            href="\pasien\create">
                            Daftar Konsultasi</a>
                    </li>
                    <li class="md:mr-4">
                        <a class="inline-block font-semibold px-4 py-2 text-white bg-blue-600 md:bg-transparent md:text-white border border-white rounded-full"
                            href="{{ route('booking') }}">
                            Detail Booking</a>
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="inline">
                        @csrf
                        <button class="inline-block font-semibold px-4 py-2 text-white bg-blue-600 md:bg-transparent md:text-white border border-white rounded-full"
                        type="submit">Keluar</button>
                    </form>

                    <svg class="h-10 w-10 text-white ml-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </ul>
            </div>
        </div>

        <div class="flex flex-wrap items-center justify-between py-6">
            <div class="w-1/2 md:w-auto">
                <a href="index.html" class="text-white font-bold text-2xl">
                PMB DYAH SUMARMO
                </a>
            </div>

            <input type="checkbox" id="menu-toggle" class="hidden" />

            <label for="menu-toggle" class="pointer-cursor md:hidden block">
                <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                    <title>menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
            </label>

            <div id="menu" class="hidden md:block w-full md:w-auto">
                <nav class="w-full bg-transparent md:bg-transparent rounded shadow-lg px-6 py-4 mt-4 text-center md:p-0 md:mt-0 md:shadow-none">
                    <ul class="md:flex items-center">
                        <li>
                            <a class="py-2 inline-block md:text-white md:hidden lg:block font-semibold" href="{{ route('dashboard') }}">
                                Beranda</a>
                        </li>
                        <li class="md:ml-4">
                            <a class="py-2 inline-block md:text-white font-semibold" href="#Tentang-Kami">
                                Tentang Kami</a>
                        </li>
                        <li class="md:ml-4">
                            <a class="py-2 inline-block md:text-white md:px-2 font-semibold" href="#Layanan">
                                Layanan</a>
                        </li>
                        <li class="md:ml-4">
                            <a class="py-2 inline-block md:text-white md:px-2 font-semibold" href="#" onclick="openModal()">
                                Jadwal</a>
                        </li>
                        <li class="md:ml-4">
                        <a
                            class="py-2 inline-block md:text-white md:px-2 font-semibold" href="#Pengumuman">
                                Pengumuman</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main>
        <section>
            <div>
                @if (!empty(session('success')))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                @yield('content')
            </div>
        </section>
    </main>

    <footer class="relative bg-gray-900 text-white px-4 sm:px-8 lg:px-16 xl:px-40 2xl:px-64 py-12 lg:py-24">
        <div class="flex flex-col md:flex-row">
            <div class="w-full lg:w-2/6 lg:mx-4 lg:pr-8">
                <h3 class="font-bold text-2xl">PMB DYAH SUMARMO</h3>
                <p class="text-gray-400">
                Solusi sehat untuk ibu dan anak, konsultasi mudah pelayanan
                lengkap kapan saja!
                </p>
            </div>

            <div class="w-full lg:w-1/6 mt-8 lg:mt-0 lg:mx-4">
                <h5 class="uppercase tracking-wider font-semibold text-gray-500">
                Layanan
                </h5>
                <ul class="mt-4">
                    <li class="mt-2">
                        <a href="#Layanan" title="" class="opacity-75 hover:opacity-100">
                            Kesehatan Ibu dan Anak</a>
                    </li>
                    <li class="mt-2">
                        <a href="#Layanan" title="" class="opacity-75 hover:opacity-100">
                            Keluarga Berencana</a>
                    </li>
                    <li class="mt-2">
                        <a href="#Layanan" title="" class="opacity-75 hover:opacity-100">
                            Persalinan</a>
                    </li>
                </ul>
            </div>

            <div class="w-full lg:w-2/6 mt-8 lg:mt-0 lg:mx-4 lg:pr-8">
                <h5 class="uppercase tracking-wider font-semibold text-gray-500">
                Kontak Kami
                </h5>
                <ul class="mt-4">
                    <li>
                        <a href="https://maps.app.goo.gl/pbE2sxMwGEVsQdrX6" target="_blank"
                        title="Klik untuk melihat di Google Maps" class="block flex items-center opacity-75 hover:opacity-100">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                                <path
                                    d="M12,2C7.589,2,4,5.589,4,9.995C3.971,16.44,11.696,21.784,12,22c0,0,8.029-5.56,8-12C20,5.589,16.411,2,12,2z M12,14 c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S14.21,14,12,14z"/>
                                </svg>
                            </span>
                            <span class="ml-3">
                                Kuncen 9/2 Tanjungsari Banyudono Boyolali
                            </span>
                        </a>
                    </li>
                    <li class="mt-4">
                        <a href="#" title="" class="block flex items-center opacity-75 hover:opacity-100">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                                <path
                                    d="M12,2C6.486,2,2,6.486,2,12s4.486,10,10,10c5.514,0,10-4.486,10-10S17.514,2,12,2z M12,20c-4.411,0-8-3.589-8-8 s3.589-8,8-8s8,3.589,8,8S16.411,20,12,20z"/>
                                <path d="M13 7L11 7 11 13 17 13 17 11 13 11z" />
                                </svg>
                            </span>
                            <span class="ml-3">
                                Open: 07:00 WIB<br />
                                Closed: 20:00 WIB
                            </span>
                        </a>
                    </li>
                    <li class="mt-4">
                        <a href="tel:+6282225229329" title="" class="block flex items-center opacity-75 hover:opacity-100">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current" >
                                <path
                                    d="M14.594,13.994l-1.66,1.66c-0.577-0.109-1.734-0.471-2.926-1.66c-1.193-1.193-1.553-2.354-1.661-2.926l1.661-1.66 l0.701-0.701L5.295,3.293L4.594,3.994l-1,1C3.42,5.168,3.316,5.398,3.303,5.643c-0.015,0.25-0.302,6.172,4.291,10.766 C11.6,20.414,16.618,20.707,18,20.707c0.202,0,0.326-0.006,0.358-0.008c0.245-0.014,0.476-0.117,0.649-0.291l1-1l0.697-0.697 l-5.414-5.414L14.594,13.994z"/>
                                </svg>
                            </span>
                            <span class="ml-3 font-sans"> +62 822-2522-9329 </span>
                        </a>
                    </li>
                    <li class="mt-4">
                        <a href="mailto:info@pmbdyahsumarmo.com" title="" class="block flex items-center opacity-75 hover:opacity-100" >
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                                <path
                                    d="M20,4H4C2.896,4,2,4.896,2,6v12c0,1.104,0.896,2,2,2h16c1.104,0,2-0.896,2-2V6C22,4.896,21.104,4,20,4z M20,8.7l-8,5.334 L4,8.7V6.297l8,5.333l8-5.333V8.7z"/>
                                </svg>
                            </span>
                            <span class="ml-3"> info@pmbdyahsumarmo.com </span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="w-full lg:w-1/6 mt-8 lg:mt-0 lg:mx-4">
                <h5 class="uppercase tracking-wider font-semibold text-gray-500">
                We're Social
                </h5>
                <ul class="mt-4 flex">
                    <li>
                        <a href="#" target="_blank" title="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                                <path
                                d="M20,3H4C3.447,3,3,3.448,3,4v16c0,0.552,0.447,1,1,1h8.615v-6.96h-2.338v-2.725h2.338v-2c0-2.325,1.42-3.592,3.5-3.592	c0.699-0.002,1.399,0.034,2.095,0.107v2.42h-1.435c-1.128,0-1.348,0.538-1.348,1.325v1.735h2.697l-0.35,2.725h-2.348V21H20	c0.553,0,1-0.448,1-1V4C21,3.448,20.553,3,20,3z"/>
                            </svg>
                        </a>
                    </li>

                    <li class="ml-6">
                        <a href="#" target="_blank" title="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                                <path
                                d="M19.633,7.997c0.013,0.175,0.013,0.349,0.013,0.523c0,5.325-4.053,11.461-11.46,11.461c-2.282,0-4.402-0.661-6.186-1.809	c0.324,0.037,0.636,0.05,0.973,0.05c1.883,0,3.616-0.636,5.001-1.721c-1.771-0.037-3.255-1.197-3.767-2.793	c0.249,0.037,0.499,0.062,0.761,0.062c0.361,0,0.724-0.05,1.061-0.137c-1.847-0.374-3.23-1.995-3.23-3.953v-0.05	c0.537,0.299,1.16,0.486,1.82,0.511C3.534,9.419,2.823,8.184,2.823,6.787c0-0.748,0.199-1.434,0.548-2.032	c1.983,2.443,4.964,4.04,8.306,4.215c-0.062-0.3-0.1-0.611-0.1-0.923c0-2.22,1.796-4.028,4.028-4.028	c1.16,0,2.207,0.486,2.943,1.272c0.91-0.175,1.782-0.512,2.556-0.973c-0.299,0.935-0.936,1.721-1.771,2.22	c0.811-0.088,1.597-0.312,2.319-0.624C21.104,6.712,20.419,7.423,19.633,7.997z"/>
                            </svg>
                        </a>
                    </li>

                    <li class="ml-6">
                        <a href="#" target="_blank" title="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current" >
                                <path
                                d="M20.947,8.305c-0.011-0.757-0.151-1.508-0.419-2.216c-0.469-1.209-1.424-2.165-2.633-2.633 c-0.699-0.263-1.438-0.404-2.186-0.42C14.747,2.993,14.442,2.981,12,2.981s-2.755,0-3.71,0.055 c-0.747,0.016-1.486,0.157-2.185,0.42C4.896,3.924,3.94,4.88,3.472,6.089C3.209,6.788,3.067,7.527,3.053,8.274 c-0.043,0.963-0.056,1.268-0.056,3.71s0,2.754,0.056,3.71c0.015,0.748,0.156,1.486,0.419,2.187 c0.469,1.208,1.424,2.164,2.634,2.632c0.696,0.272,1.435,0.426,2.185,0.45c0.963,0.043,1.268,0.056,3.71,0.056s2.755,0,3.71-0.056 c0.747-0.015,1.486-0.156,2.186-0.419c1.209-0.469,2.164-1.425,2.633-2.633c0.263-0.7,0.404-1.438,0.419-2.187 c0.043-0.962,0.056-1.267,0.056-3.71C21.003,9.572,21.003,9.262,20.947,8.305z M11.994,16.602c-2.554,0-4.623-2.069-4.623-4.623 s2.069-4.623,4.623-4.623c2.552,0,4.623,2.069,4.623,4.623S14.546,16.602,11.994,16.602z M16.801,8.263 c-0.597,0-1.078-0.482-1.078-1.078s0.481-1.078,1.078-1.078c0.595,0,1.077,0.482,1.077,1.078S17.396,8.263,16.801,8.263z"/>
                                <circle cx="11.994" cy="11.979" r="3.003" />
                            </svg>
                        </a>
                    </li>

                    <li class="ml-6">
                        <a href="#" target="_blank" title="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current" >
                                <path
                                d="M21.593,7.203c-0.23-0.858-0.905-1.535-1.762-1.766C18.265,5.007,12,5,12,5S5.736,4.993,4.169,5.404	c-0.84,0.229-1.534,0.921-1.766,1.778c-0.413,1.566-0.417,4.814-0.417,4.814s-0.004,3.264,0.406,4.814	c0.23,0.857,0.905,1.534,1.763,1.765c1.582,0.43,7.83,0.437,7.83,0.437s6.265,0.007,7.831-0.403c0.856-0.23,1.534-0.906,1.767-1.763	C21.997,15.281,22,12.034,22,12.034S22.02,8.769,21.593,7.203z M9.996,15.005l0.005-6l5.207,3.005L9.996,15.005z"/>
                            </svg>
                        </a>
                    </li>
                </ul>

                <p class="text-sm text-gray-400 mt-12">
                © {{ date('Y') }} PMB DYAH SUMARMO.
                </p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.getElementById("menu-btn").addEventListener("click", function() {
            document.getElementById("menu").classList.toggle("hidden");
        });

        @if (session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: '{{ session('success') }}',
                showConfirmButton: false,
                timer: 3000
            });
        @endif
    </script>
    @yield('script')
    <script
        async
        src="https://www.googletagmanager.com/gtag/js?id=UA-131505823-4">
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
        dataLayer.push(arguments);
        }
        gtag("js", new Date());

        gtag("config", "UA-131505823-4");
    </script>
    <script>
        const navbar = document.getElementById("navbar");

        window.addEventListener("scroll", () => {
            if (window.scrollY === 0) {
                navbar.classList.remove("bg-transparent");
                navbar.classList.add("bg-transparent");
            } else {
                navbar.classList.remove("bg-transparent");
                navbar.classList.add("bg-blue-600");
            }
        });
    </script>
    <script>
        document
            .getElementById("menu-toggle")
            .addEventListener("change", function () {
                const menu = document.getElementById("menu");
                const navbar = document.querySelector(".navbar"); // Sesuaikan selector dengan elemen navbar Anda

                if (this.checked) {
                    menu.classList.remove("hidden");
                    menu.classList.add("bg-blue-600"); // Tambahkan background biru saat toggle aktif
                    navbar.classList.add("bg-blue-600"); // Pastikan navbar juga berubah menjadi biru
                } else {
                    menu.classList.add("hidden");
                    navbar.classList.remove("bg-blue-600"); // Kembali transparan saat toggle dinonaktifkan dan di-scroll
                }
            });
    </script>
</body>

</html>
