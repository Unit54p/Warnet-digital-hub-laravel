<link rel="stylesheet" href={{ asset('css\navbar.css') }}>

<style>
    /* CSS untuk navbar yang akan menghilang dan muncul kembali */
    #navbar {
        /* transition: top 0.3s ease-in-out;
        /* Animasi untuk pergerakan navbar */
        /* top: 0;
        left: 0;
        right: 0;
        position: fixed; */

        position: sticky;
        top: 0%;
    }

    /* Gaya ketika navbar disembunyikan */
    #navbar.hidden {
        /* top: -80px; */
        /* Menyembunyikan navbar di atas layar */
    }
</style>

<nav id="navbar" class="">

    <div class="navbar navbar-expand-lg navbar-bg-costum  px-5">

        {{-- <img src="{{ asset('img/logo_digital_hub.png') }}" class="img_logo mx-3" alt=""> --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-2">
                <li class="nav-item">
                    <a class="nav-link  {{ Request::is('/') ? 'active_bar' : 'nav_costum_style' }} " aria-current="page"
                        href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  {{ Request::is('store') ? 'active_bar' : 'nav_costum_style' }} "
                        aria-current="page" href="/store">Store</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  {{ Request::is('facility') ? 'active_bar' : 'nav_costum_style' }}"
                        aria-current="page" href="/facility">Facility</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  {{ Request::is('about_us') ? 'active_bar' : 'nav_costum_style' }}"
                        href="/about_us" aria-current="page">
                        About Us
                    </a>
                </li>

            </ul>
        </div>

        <div>
            <span id="username">username</span>
            <img src="{{ asset('img/logo_digital_hub.png') }}" class="img_logo  border-animation-1" alt="">
        </div>
    </div>

</nav>
<script>
    // let lastScrollTop = 0; // Variabel untuk menyimpan posisi scroll terakhir
    // const navbar = document.getElementById('navbar'); // Mendapatkan elemen navbar

    // window.addEventListener('scroll', function() {
    //     let currentScroll = window.pageYOffset || document.documentElement.scrollTop;

    //     // Jika scrolling ke bawah
    //     if (currentScroll > lastScrollTop) {
    //         navbar.classList.add('hidden'); // Menyembunyikan navbar
    //     } else {
    //         navbar.classList.remove('hidden'); // Menampilkan navbar
    //     }

    //     lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // Update posisi scroll terakhir
    // });
</script>
